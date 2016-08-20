<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 20.08.16
 * Time: 19:43
 */

namespace App;


class App
{
    public $config = [];
    
    public function  __construct($config = [])
    {
        $this->config = $config;
    }

    public function run()
    {
        echo 'method run' . '<br>';
    }

    public function done()
    {
        echo 'method done' . '<br>';
    }
}