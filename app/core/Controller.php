<?php

namespace app\core;

use app\core\View;

abstract class Controller {

	public $route;
	public $view;

	public function __construct($route)
	{
		$this->route = $route;
		$this->view = new View($route);
		$this->model = $this->loadModel($route['Controller']);
	}

	public function loadModel($name) {
		$path = 'app\models\\' . ucfirst($name);
		if (class_exists($path)) {
			return new $path;
		}
		debug($path);
	}

	public function checkAuth($name) {
	    if (isset($_SESSION['ADMIN']) && isset($_SESSION['USER']) && isset($_SESSION['USER_ID']) && ($_SESSION['ADMIN'] == mb_strtoupper($name, 'utf-8'))) {
	        return true;
        }
        elseif (isset($_SESSION['USER']) && isset($_SESSION['USER_ID']) && ($_SESSION['USER'] == mb_strtoupper($name, 'utf-8'))) {
	        return true;
        }
        elseif (!isset($_SESSION['USER']) && !isset($_SESSION['USER_ID'])) {
            $_SESSION['GUEST'] = true;
            return false;
        }
        return false;
    }
}