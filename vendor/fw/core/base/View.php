<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17.12.2022
 * Time: 19:31
 */

namespace fw\core\base;


class View{
    public $route = [];
    public $layout;//шаблон
    public $view;//вид

    public function __construct($route,$layout = '',$view = ''){
        $this->route = $route;
        $this->layout = $layout ?: LAYOUT;
        $this->view = $view;
    }

    public function render(){
        $file_view = APP . "/view/{$this->route['controller']}/{$this->view}.php";
        ob_start();
        if(file_exists($file_view)){
            require $file_view;
        }else{
            echo "$file_view not found";
        }
        $content = ob_get_clean();
        $file_layout = APP . "/view/layouts/{$this->layout}.php";
        if(file_exists($file_layout)){
//            require $file_layout;
        }else {
            echo "$file_layout not found";
        }
    }

}