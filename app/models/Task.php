<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 08.10.2019
 * Time: 11:31
 */

namespace App\Models;


class Task extends AppModel
{
    public $attributes = [
        'user_name' => '',
        'user_email' => '',
        'text' => '',
        'is_edit' => '0',
        'status' => '0',
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