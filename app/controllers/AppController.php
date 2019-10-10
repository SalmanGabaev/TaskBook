<?php

namespace App\Controllers;

use App\Models\AppModel;
use System\Base\Controller;

class AppController extends Controller{

    public function __construct($route){
        parent::__construct($route);
        new AppModel();
    }

}