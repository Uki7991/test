<?php

namespace app\core;

use app\core\View;

class Router {

    protected $params = [];
    protected $routes = [];

    public function __construct() {
        $arr = require 'app/conf/routes.php';
        foreach ($arr as $key => $value) {
            $this->add($key, $value);
        }
        $this->run();
    }

    public function add($route, $params) {
        $route = '#^' . $route . '$#';
        $this->routes[$route] = $params;
    }

    public function match() {
        $url = $_SERVER['REQUEST_URI'];
        foreach ($this->routes as $route => $params) {
            if (preg_match($route, $url, $matches)) {
                $this->params = $params;
                return true;
            } 
        }
        return false;
    }

    public function run() {
        if ($this->match()) {
            $path = 'app\controllers\\' . ucfirst($this->params['Controller']) . 'Controller';
            if (class_exists($path)) {
                $action = $this->params['Action'];
                if (method_exists($path, $action)) {
                    $controller = new $path($this->params);
                    $controller->$action();
                }
                else {
                    View::errorCode(404);
                }
            }
            else {
                View::errorCode(404);
            }
        }
        else {
            View::errorCode(404);
        }
    }

}