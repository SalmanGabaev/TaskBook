<?php

namespace App\Controllers;

use App\Models\Task;
use System\App;

class MainController extends AppController {

    public function indexAction(){

        if (!empty($_POST)) {
            $task = new Task();

            $data = $_POST;
            $data['user_name'] = htmlspecialchars($data['user_name']);
            $data['user_email'] = htmlspecialchars($data['user_email']);
            $data['text'] = htmlspecialchars($data['text']);

            $task->load($data);

            if (!$task->validate($data)) {
                $task->getErrors();
            }else {
                if ($task->save('tasks')) {
                    $_SESSION['success'] = 'Новая задача успешно создана';
                }else {
                    $_SESSION['error'] = 'Ошибка!';
                }
            }

            redirect(PATH);
        }

        $this->setMeta('Главная страница', 'Описание...', 'Ключевики...');
        $tasks = \R::find('tasks');
        $this->set(compact('tasks'));

    }




}