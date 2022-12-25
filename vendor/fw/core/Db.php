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
    protected static $instance;

    protected function __construct()
    {
        $db = require ROOT . '/config/config_db.php';
        try {
            $this->pdo = new \PDO($db['dsn'], $db['user'], $db['password']);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function instance()
    {
        if (self::$instance === NULL) {
            self::$instance = new self();

        }
        return self::$instance;
    }

    public function execute($sql)
    {
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute();
    }

    public function query($sql)
    {
        $stmt = $this->pdo->prepare($sql);
        $res = $stmt->execute();
        if ($res !== FALSE) {
            return $stmt->fetchAll();
        }
        return [];
    }
}
