<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 13.12.2022
 * Time: 0:33
 */

namespace app\controller;


use app\model\Main;


class MainController extends AppController
{
//    public $layout = 'default';
    public function indexAction(){
//    $this->layout = false;
//    $this->view = 'Test';
    $model = new Main();
       $name = 'ruslan';
<<<<<<< Updated upstream
       $create_table = $model->query("CREATE TABLE `posts` ( `test1` int(11) NOT NULL, `test2` int(11) NOT NULL, `test3` int(11) NOT NULL, `test4` int(11) NOT NULL ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;");
       $insert_data = $model->query("INSERT INTO `posts` (`test1`, `test2`, `test3`, `test4`) VALUES (1, 2, 3, 4);");
       $get_res = $model->findAll();
       d($get_res);
=======
       $res = $model->query("SELECT * FROM `posts`");
       d($res);
>>>>>>> Stashed changes
       $this->set(compact('name'));

    }

}


