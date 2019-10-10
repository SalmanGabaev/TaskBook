<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 10.10.2019
 * Time: 13:34
 */

namespace App\Models\Admin;


use App\Models\AppModel;

class Task extends AppModel
{
    public $attributes = [
        'user_name' => '',
        'user_email' => '',
        'text' => '',
    ];

    public $rules = [
        'required' => [
            ['user_name'],
            ['user_email'],
            ['text'],
        ],

        'email' => [
            ['user_email']
        ],
    ];
}