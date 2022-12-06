<?php

require '../vendor/fw/core/Router.php';
require '../vendor/fw/libs/function.php';

$query = rtrim($_SERVER['QUERY_STRING'], '/');
// Router::add('post/add', ['controller'=>'Posts', 'action'=>'add']);
// Router::add('post', ['controller'=>'Posts', 'action'=>'index']);
// Router::add(' ', ['controller'=>'Main', 'action'=>'index']);
// Router::add(' ', ['controller'=>'Main', 'action'=>'index']);

Router::add('^$', ['controller'=>'Main', 'action'=>'index']);
Router::add('([a-z-]+)/([a-z-]+)');
// d(Router::getRoutes());
if(Router::matchRoute($query)){
    // d(Router::getRoutes());

} else {
    echo '404';
}


//require 