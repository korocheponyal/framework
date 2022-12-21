<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.12.2022
 * Time: 22:41
 */

namespace fw\core;


class Db
{
    protected $pdo;
    protected static $instans;

    protected function __construct()
    {
        $db = require ROOT . 'config/config_db.php';
        $this->pdo = new \PDO($db['dsn'], $db['user'], $db['password']);
    }

    public static function instans(){
        if(self::$instans === NULL){
            self::$instans = new self();

        }
    return self::$instans;
    }

    public function execute($sql){
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute();
    }

    public function query($sql){
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute();
        if($res !== FALSE){
            return $stmt->fetchAll();
        }
     return [];
    }
}