<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.10.2019
 * Time: 15:33
 */

namespace App\Controllers\Admin;

use App\Models\AppModel;
use App\Models\User;
use System\Base\Controller;

class AppController extends Controller
{
    public $layout = 'admin';

    public function __construct($route){
        parent::__construct($route);
        if(!User::isAdmin()){
            redirect(PATH . '/user/login');
        }
        new AppModel();
    }

    public function getRequestID($get = true, $id = 'id'){
        if($get){
            $data = $_GET;
        }else{
            $data = $_POST;
        }
        $id = !empty($data[$id]) ? (int)$data[$id] : null;
        if(!$id){
            throw new \Exception('Страница не найдена', 404);
        }
        return $id;
    }
}