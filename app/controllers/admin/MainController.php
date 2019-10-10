<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.10.2019
 * Time: 15:40
 */

namespace App\Controllers\Admin;


class MainController extends AppController
{
    public function indexAction() {
        $this->setMeta('Панель администратора');
        $tasks = \R::find('tasks');
        $this->set(compact('tasks'));
    }

    public function executeAction() {
        debug($this->data);
        die;
    }
}