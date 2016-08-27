<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 28.08.16
 * Time: 1:06
 */

namespace DB;

use PDO;

class MySqlConnector extends Connector implements DBOAdapterInterface
{

    public function query($sql)
    {
        $query = $this->conn->prepare($sql);
        $query->execute();
        return $query;
    }

    public function fetch($query)
    {
        print_r($query);
        return $query->fetch();
    }
}