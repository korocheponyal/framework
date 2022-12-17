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
    private static function matchRoute($url){
        foreach(self::$routes as $pattern=>$route){
            if(preg_match("#$pattern#i",$url,$matches)){
                foreach ($matches as $k=>$v){
                    if(is_string($k)){
                        $route[$k] = $v;
                    }
                }
                if(!isset($route['action'])){
                    $route['action'] = 'index';
                }
                $route['controller'] = self::upperCamelCase($route['controller']);
                self::$route = $route;
                return true;
            }
           
        }
        return false;
    }

    /**
     * redirect URL to correct route
     * @param  string $url input URL
     * @return void
     */
    public static function dispatch($url){
        $url = self::rewoveQueryString($url);
//        d($url);
        if(self::matchRoute($url)){
            $controller = 'app\controller\\' . self::$route['controller'];
            if(class_exists($controller)){
                $cObj = new $controller(self::$route);
                $action = self::lowerCamelCase(self::$route['action']) . 'Action';
              if(method_exists($cObj,$action)){
                  $cObj->$action();
                  $cObj->getView();
              }else {
                  echo "$controller::$action <div style='color: red;'><b>not found</b></div>";
              }
            } else{
                echo "$controller <div style='color: red;'><b>not found</b></div>";
            }
        }else{
            http_response_code(404);
            include '404.php';
        }
    }
    protected static function upperCamelCase($name){
         return str_replace(' ','',ucwords(str_replace('-',' ',$name)));

    }
    protected static function lowerCamelCase($name){
        return lcfirst(self::upperCamelCase($name));
    }

    protected static function rewoveQueryString($url){
        if($url){
            $params = explode('&', $url, 2);
            if(!strpos($params['0'],'=')){
                return rtrim($params['0'],'/');
            }else{
                return '';
            }
        }

    }
}



