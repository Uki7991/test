<?php

namespace app\core;


class View {

	public $layout = 'default';
	
	public function __construct() {

	}

	public function render($path, $title, $vars = []) {
		extract($vars);
		if (file_exists('app/views/' . $path . '.php')) {
			ob_start();
			require 'app/views/' . $path . '.php';
			$content = ob_get_clean();
			require 'app/views/layouts/' . $this->layout . '.php';
		}
		else {
			$this->errorCode(404);
			// echo "View not found: " . 'app/views/' . $this->path . '.php';
		}
	}

	public function redirect($url) {
		header('location: ' . $url);
		exit;
	}

	public static function errorCode($code) {
		http_response_code($code);
		require 'app/views/error/' . $code . '.php';
		exit;
	}

}