<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 28.08.16
 * Time: 1:32
 */

namespace DB;


use PDO;
use PDOException;

class Connector
{

    public $conn;

    public function __construct($config = [])
    {
        $dsn = $config['driver'] . ":dbname=" . $config['db_name'] . ";host=" . $config['host'];
        $user = $config['user'];
        $password = $config['password'];

        try {
            $this->conn = new PDO($dsn, $user, $password);
        } catch (PDOException $e) {
            echo 'Подключение не удалось: ' . $e->getMessage();
        }

    }

}