<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.2022
 * Time: 0:33
 */

namespace app\controller;


use app\model\Main;


class MainController extends AppController
{
//    public $layout = 'default';
    public function indexAction(){
//    $this->layout = false;
//    $this->view = 'Test';
    $model = new Main();
       $name = 'ruslan';
       $res = $model->query("SELECT * FROM `posts`");
        d($res);
       $this->set(compact('name'));

    }

}


