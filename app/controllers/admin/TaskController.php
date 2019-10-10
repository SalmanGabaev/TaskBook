<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 09.10.2019
 * Time: 18:07
 */

namespace App\Controllers\Admin;


use App\Models\Task;
use R;

class TaskController extends AppController
{
    public function executeAction () {
        $id = $this->getRequestID();

        $task = $book = R::load( 'tasks', $id);
        $task->status = 1;
        R::store($task);

        redirect(ADMIN);
    }

    public function editAction(){
        if(!empty($_POST)){
            $id = $this->getRequestID(false);
            $task = new Task();
            $data = $_POST;

            $data['user_name'] = htmlspecialchars($data['user_name']);
            $data['user_email'] = htmlspecialchars($data['user_email']);
            $data['text'] = htmlspecialchars($data['text']);
            $data['is_edit'] = 1;

            $task->load($data);


            if(!$task->validate($data)){
                $task->getErrors();
                redirect();
            }
            if($task->update('tasks', $id)){
                $_SESSION['success'] = 'Изменения сохранены';
            }
            redirect();
        }

        $task_id = $this->getRequestID();
        $task = \R::load('tasks', $task_id);
        $this->setMeta('Редактирование Задачи');
        $this->set(compact('task'));
    }
}