<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.10.2019
 * Time: 0:37
 */

namespace App\Controllers;


use App\Models\User;

class UserController extends AppController
{
    public function signupAction() {
        if (!empty($_POST)) {
            $user = new User();
            $data = $_POST;
            $user->load($data);

            if (!$user->validate($data) || !$user->checkUnique()) {
                $user->getErrors();
            }else {
                $user->attributes['password'] = password_hash($user->attributes['password'], PASSWORD_DEFAULT);
                if ($id = $user->save('users')) {
                    $_SESSION['success'] = 'Пользователь зарегистрирован успешно';
                    $_SESSION['user']['name'] = $data['name'];
                    $_SESSION['user']['email'] = $data['email'];
                    redirect(PATH);
                }else {
                    $_SESSION['error'] = 'Ошибка!';
                    redirect();
                }
            }
        }
        $this->setMeta('Регистрация');
    }

    public function loginAction() {
        if (!empty($_POST)) {
            $user = new User();
            if ($user->login(User::isAdmin()) && User::isAdmin()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
                redirect(ADMIN);
            }elseif ($user->login(User::isAdmin()) && !User::isAdmin()) {
                $_SESSION['success'] = 'Вы успешно авторизованы';
                redirect(PATH);
            }else{
                $_SESSION['error'] = 'Логин/Пароль введены не правильно';
                redirect();
            }
        }
        $this->setMeta('Вход');
    }

    public function logoutAction() {
        if (isset($_SESSION['user'])) unset($_SESSION['user']);
        redirect(PATH);
    }
}