<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 28.08.16
 * Time: 1:07
 */

namespace DB;

class ConnectionFactory
{
    public $config = [];

    public static function factory(array $config)
    {

        switch ($config['DB']['driver']) {
            case 'mysql':
                return new MySqlConnector($config['DB']);
            case 'pgsql':
                return new PostgresConnector($config['DB']);
            case 'sqlite':
                return new SQLiteConnector($config['DB']);
            case 'sqlsrv':
                return new SqlServerConnector($config['DB']);
            default :
                return new MySqlConnector($config['DB']);
        }


        /*
        $class_name = $car; // Допустим, название класса и машины у нас совпадают
        require ($car . '.php'); // Допустим, название класса и файла тоже совпадают
        $object = new $class_name;
        return $object;
        */
    }

}