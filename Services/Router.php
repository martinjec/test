<?php

namespace Services;

class Router
{
    public $url;

    //Prepare data
    public function __construct()
    {
        $url = $_SERVER['REQUEST_URI'];
        $url = rtrim($url, '/');
        $url = explode('/', $url);
        $this->url = $url;
    }
    //Run routes
    public function run()
    {
        $url = $this->url;
        if (empty($url[1])) {
            $class = 'Controllers\ItemList';
            new $class();
        }
        if (!empty($url[1])) {
            if (empty($url[2])) {
                $class = 'Controllers\\' . $url[1];
                new $class();
            } else {
                $class = 'Controllers\\' . $url[1];
                $method = $url[2];
                $obj = new $class();
                $obj->$method();
            }
        }
    }
}
