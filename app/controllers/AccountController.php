<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Gender;

class AccountController extends Controller {

	public function login() {
		$this->view->render('account/login', 'Login 	page');
	}

	public function register() {
	    $gender = new Gender;
	    $gendersList = $gender->all();
	    $vars = [
	        'genders' => $gendersList,
        ];

		$this->view->render('account/register', 'Register page', $vars);
	}

	public function store() {
//	    debug($_POST);

	    $vars = [
	        'fname' => $_POST['fname'],
	        'lname' => $_POST['lname'],
	        'login' => $_POST['login'],
	        'mail' => $_POST['mail'],
	        'date_birth' => $_POST['date_birth'],
	        'gender_id' => $_POST['gender_id'],
	        'password' => $_POST['password'],
        ];

	    $oldvars = $vars;

	    $repeated_pass = $_POST['repeat_password'];

	    $errors = $this->model->check($vars, $repeated_pass);
	    if ($errors) {
            $this->model->create($vars);
        }


	    $this->view->redirect('/register');
    }

    public function loginTo() {
	    $vars = [
	        'login' => $_POST['login'],
            'password' => $_POST['password'],
        ];

	    $result = $this->model->checkLogin($vars);
        $user = $result[0];
	    if (!empty($user)) {
	        if (isset($_SESSION['GUEST']))
	            unset($_SESSION['GUEST']);
	        $_SESSION['USER'] = 'USER';
	        $_SESSION['user'] = $user;
	        $_SESSION['USER_ID'] = $user['id'];
	        if ($user['admin']) {
	            $_SESSION['ADMIN'] = 'ADMIN';
            }
	        $this->view->redirect('/');
        }
        else {
	        $_SESSION['GUEST'] = 'GUEST';
	        $this->view->redirect('/login');
        }
    }

    public function logout() {
	    if (isset($_SESSION['USER']) && isset($_SESSION['USER_ID'])) {
	        unset($_SESSION['USER'], $_SESSION['USER_ID']);
        }

        $this->view->redirect('/login');
    }

}