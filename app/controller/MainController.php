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
    public function indexAction()
    {
//    $this->layout = false;
//    $this->view = 'Test';
        $model = new Main();
        d($model);
        $name = 'ruslan';
        $this->set(compact('name'));
        $res2 = $model->query("SELECT * FROM `posts`");
        $res = $model->findAll();
        d($res);
    }
}


