<?php

namespace System\Base;

use System\Db;
use Valitron\Validator;

abstract class Model{

    public $attributes = [];
    public $errors = [];
    public $rules = [];

    /**
     * Model constructor.
     */
    public function __construct(){
        Db::instance();
    }

    /**
     * @param $data
     */
    public function load($data) {
        foreach ($this->attributes as $name => $value) {
            if (isset($data[$name])) {
                $this->attributes[$name] = $data[$name];
            }
        }
    }

    /**
     * @param $table
     * @return int|string
     * @throws \RedBeanPHP\RedException\SQL
     */
    public function save($table) {
        $tbl = \R::dispense($table);

        foreach ($this->attributes as $name => $value)  {
            $tbl->$name = $value;
        }

        return \R::store($tbl);
    }

    /**
     * @param $table
     * @param $id
     * @return int|string
     * @throws \RedBeanPHP\RedException\SQL
     */
    public function update($table, $id){
        $bean = \R::load($table, $id);
        foreach($this->attributes as $name => $value){
            $bean->$name = $value;
        }
        return \R::store($bean);
    }

    /**
     * @param $data
     * @return bool
     *
     * Метод валидации данных
     */
    public function validate($data) {
        Validator::langDir(WWW . '/validator/lang');
        Validator::lang('ru');
        $v = new Validator($data);
        $v->rules($this->rules);

        if ($v->validate()) {
            return true;
        }

        $this->errors = $v->errors();
        return false;
    }

    /**
     * Get Validation Errors
     */
    public function getErrors(){
        $errors = '<ul>';
        foreach($this->errors as $error){
            foreach($error as $item){
                $errors .= "<li>$item</li>";
            }
        }
        $errors .= '</ul>';
        $_SESSION['error'] = $errors;
    }

}