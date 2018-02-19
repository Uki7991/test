<?php

namespace app\controllers;

use app\core\Controller;

class MainController extends Controller
{

	public function index() {

		$news = $this->model->getNews();

		$vars = [
			'news' => $news,
		];

		$this->view->render('main', 'Main page', $vars);
	}	

}