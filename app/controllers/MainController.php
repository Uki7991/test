<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

	public function index() {

		$this->view->render('main', 'Main page');
	}

	public function about() {
	    $this->view->render('about', 'About me');
    }

}