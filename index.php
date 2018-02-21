<?php

require 'app/lib/Dev.php';

use app\core\Router;

spl_autoload_register(
	function ($class) {
    $path = str_replace('\\', '/', $class . '.php');
    if (file_exists($path)) {
        require $path;
    }
});

$lifetime = require_once 'app\conf\session.php';

session_start([
    'cookie_lifetime' => $lifetime * 60,
]);

$router = new Router();