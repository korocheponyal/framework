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
    public $layout;
    public $vars = [];

    public function __construct($route)
    {
        $this->route = $route;
        $this->view = $route['action'];

    }

    public function getView()
    {
        $vObj = new View($this->route, $this->layout, $this->view);
        $vObj->render($this->vars);
    }

    public function set($vars)
    {
        $this->vars = $vars;
    }
}

