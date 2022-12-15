<?php

error_reporting(-1);
use fw\core\Router;
use app\controller\Main;
require '../vendor/autoload.php';
require '../vendor/fw/libs/function.php';
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');


$query = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('^pages/?(?P<action>[a-z-]+)?$',['controller'=>'Posts']);
Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
//d(Router::getRoutes());
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
//d(Router::getRoutes());
Router::dispatch($query);




