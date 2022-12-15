<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 15.12.2022
 * Time: 21:19
 */

namespace fw\core\base;


abstract class Controller
{
    public $view;
    public $route = [];
    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];
        d($route['controller']);
        d($this->view);
        include APP . "/view/{$route['controller']}/{$this->view}.php";
//        d(APP . "/view/{$route['controller']}/{$this->view}.php");
    }


}

