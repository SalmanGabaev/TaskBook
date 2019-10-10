<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.10.2019
 * Time: 0:59
 */

namespace App\Models;


class User extends AppModel
{
    public $attributes = [
        'name' => '',
        'email' => '',
        'login' => '',
        'password' => '',
    ];

    public $rules = [
        'required' => [
            ['name'],
            ['email'],
            ['login'],
            ['password'],
        ],

        'email' => [
            ['email']
        ],

        'lengthMin' => [
            ['password', 3],
        ],
    ];

    public function checkUnique() {
        $user = \R::findOne('users', 'email = ?', [$this->attributes['email']]);
        if ($user) {
            if ($user->email == $this->attributes['email']) {
                $this->errors['unique'][] = 'Такой E-mail уже зарегистрирован';
            }
            return false;
        }

        return true;
    }

    public function login($isAdmin = false) {
        $login = !empty(trim($_POST['login'])) ? trim($_POST['login']) : null;
        $password = !empty(trim($_POST['password'])) ? trim($_POST['password']) : null;

        if ($login && $password) {
            if ($isAdmin) {
                $user = \R::findOne('users', "login = ? AND role = 'admin'", [$login]);
            }else {
                $user = \R::findOne('users', 'login = ?', [$login]);
            }

            if ($user) {
                if (password_verify($password, $user->password)) {
                    foreach ($user as $k => $v) {
                        if ($k != 'password') $_SESSION['user'][$k] = $v;
                    }
                    return true;
                }
            }
        }

        return false;
    }

    public static function checkAuth(){
        return isset($_SESSION['user']);
    }

    public static function isAdmin(){
        return (isset($_SESSION['user']) && $_SESSION['user']['role'] == 'admin');
    }
}