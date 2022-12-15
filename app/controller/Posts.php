<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.2022
 * Time: 0:35
 */

namespace app\controller;




class Posts extends \fw\core\base\Controller
{
    public $route = [];
    public function __construct($route)
    {
        $this->route = $route;
    }

    public function indexAction(){
        $this->route;
    }
    public function testAction(){
        echo 'w';
        $this->route;
    }

}