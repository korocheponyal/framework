<?php

require '../vendor/autoload.php';
require '../vendor/fw/libs/function.php';
use fw\core\Router;

$query = rtrim($_SERVER['QUERY_STRING'], '/');

Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('^(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?$');
d(Router::getRoutes());
Router::dispatch($query);


