<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 20.08.16
 * Time: 19:43
 */

namespace App;


use DB\ConnectionFactory;
use DB\MySqlConnector;

class App
{
    public $config = [];
    
    public function  __construct($config = [])
    {
        $this->config = $config;

    }

    public function run()
    {
        /*$mysql = ConnectionFactory::factory($this->config);
        $query = $mysql->query("SELECT * FROM name");
        var_dump($mysql->fetch($query));
        */

        $routes = new Route(include("../config/routes.php"));

        $route = $routes->parseRoute();

        echo 'Call class <b>'.$route['class'].'</b> and method <b>'.$route['method'].'</b>';
    }

    public function done()
    {
        //echo 'method done' . '<br>';
    }
}