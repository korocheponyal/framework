<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.2022
 * Time: 0:33
 */

namespace app\controller;



class MainController extends AppController
{
//    public $layout = 'default';
    public function indexAction(){
//    $this->layout = false;
//    $this->view = 'Test';
//echo 'test';
       $name = 'ruslan';
       $this->set(compact('name'));

    }

}

