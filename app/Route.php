<?php
/**
 * Created by PhpStorm.
 * User: demisge
 * Date: 28.08.16
 * Time: 9:47
 */

namespace App;


class Route
{

    public $routes = null;

    public function  __construct($routes = [])
    {
        $this->routes = $routes;
    }

    /**
     * ParseRoute return correct route array
     *
     * @return array
     */
    public function parseRoute(){

        $url = $_SERVER['REQUEST_URI'];
        preg_match("/[\w\d\/]+/", $url, $newUrl);

        /* @var $route array */
        foreach ($this->routes as $key => $route){
            preg_match($this->getPattern($route), $newUrl[0], $result);

            if (isset($result[0])) {
                $route['params'] = $this->getParams($result);
                $route['name'] = $key;

                return $route;
            }
        }

        return $route = array(
            'method' => 'undefined',
            'class' => 'undefined',
            'name' => '',
            'params' => '',
        );
    }

    private function getPattern($route){
        preg_match_all("/\{([\d\w]+)\}/", $route['pattern'], $result);

        if (isset($result)){
            $pattern = $route['pattern'];

            for ( $i = 0; $i < count($result[0]); $i++ ) {
                $pattern = str_replace($result[0][$i], '('.$route['requirement'][$result[1][$i]].')', $pattern);
            }
        } else {
            $pattern = $route['pattern'];
        }

        $pattern = str_replace('/', '\/', $pattern);

        return '/^'.$pattern.'$/i';
    }


    private function getParams($results){

        foreach ($results as $values) {

            if ( $values > 0 ) {
                $params[] = $values;
            }
        }

        return $params;
    }
}