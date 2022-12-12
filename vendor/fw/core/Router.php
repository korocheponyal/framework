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
                foreach ($matches as $k=>$v){
                    if(is_string($k)){
                        $route[$k] = $v;
                        d($route);
                    }
                }
                if(!isset($route['action'])){
                    $route['action'] = 'index';
                }
                self::$route = $route;
                return true;
            }
           
        }
        return false;
    }

    public static function dispatch($url){
        if(self::matchRoute($url)){
            $controller = 'app\controller\\' . self::$route['controller'];
            d($controller);
            if(class_exists($controller)){
                echo "okey";
            } else{
                echo "$controller not found ";
            }
        }else{
            http_response_code(404);
            include '404.php';
        }
    }
}



