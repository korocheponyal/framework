<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 21.12.2022
 * Time: 22:42
 */

namespace fw\core\base;

use fw\core\Db;


abstract class Model

{
protected $pdo;
protected $table;

public function __construct()

{
    $this->pdo = Db::instance();
}

public function query($sql){
    return $this->pdo->execute($sql);
}

public function findAll()
{
    $sql = "SELECT * FROM {$this->table}";
    return $this->pdo->execute($sql);
}

}