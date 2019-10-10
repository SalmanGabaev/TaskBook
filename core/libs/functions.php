<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07.10.2019
 * Time: 9:54
 */

function debug($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';
}


function redirect($http = false){
    if($http){
        $redirect = $http;
    }else{
        $redirect = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : PATH;
    }
    header("Location: $redirect");
    exit;
}

function h($str){
    return htmlspecialchars($str);
}