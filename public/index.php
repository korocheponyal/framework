<?php

require '../vendor/autoload.php';
require '../vendor/fw/libs/function.php';
//require '../app/controller/Main.php';
use fw\core\Router;
use app\controller\Main;

$main = new Main;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
//d(Router::getRoutes());
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
//d(Router::getRoutes());
Router::dispatch($query);




