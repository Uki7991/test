<?php

namespace app\controllers;

use app\core\Controller;

class AccountController extends Controller {
	
	public function login() {

		$users = $this->model->getUsers();

		$vars = [
			'users' => $users,
		];

		$this->view->render('account/login', 'Login 	page', $vars);
	}

	public function register() {
		$this->view->render('account/register', 'Register page');
	}

}