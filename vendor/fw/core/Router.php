<?php

namespace fw\core;

class Router
{
    protected static $routes = [];
    protected static $route = []; 
    public static function add($regexp,$route = []){
        self::$routes[$regexp] = $route;
    }
    public static function getRoutes(){
        return self::$routes;
    }
    public static function matchRoute($url){
        foreach(self::$routes as $pattern=>$route){
            if(preg_match("#$pattern#i",$url,$matches)){
                d($matches);
                self::$route = $route;
                return true;
            }
           
        }
        return false;
    }
}



