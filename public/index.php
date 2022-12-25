<?php

error_reporting(-1);
use fw\core\Router;
use app\controller\MainController;
require '../vendor/autoload.php';
require '../vendor/fw/libs/function.php';
define('WWW', __DIR__);
define('CORE', dirname(__DIR__) . '/vendor/core');
define('ROOT', dirname(__DIR__));
define('APP', dirname(__DIR__) . '/app');
define('LAYOUT', 'default');


$query = rtrim($_SERVER['QUERY_STRING'], '/');
//Router::add('^pages/?(?P<action>[a-z-]+)?$',['controller'=>'PostsController']);
Router::add('^page/(?P<action>[a-z-]+)/(?P<alias>[a-z-]+)$',['controller'=>'Page']);
Router::add('^page/(?P<alias>[a-z-]+)$',['controller'=>'Page', 'action'=>'view']);
Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
//d(Router::getRoutes());
//d($_GET);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
//d(Router::getRoutes());
Router::dispatch($query);




