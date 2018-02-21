<?php
/**
 * Created by PhpStorm.
 * User: tilek
 * Date: 21.02.2018
 * Time: 23:33
 */

namespace app\controllers;

use app\core\Controller;
use app\models\Account;
use app\models\Gender;
use app\models\User;

class AdminController extends Controller {

    public function admin() {
        $gender = new Gender();
        $genderList = $gender->all();
        $user = new User();
        $users = $user->all();

        $vars = [
            'users' => $users,
            'genders' => $genderList,
        ];
        if ($this->checkAuth('admin'))
            $this->view->render('admin/index', 'Administrarion', $vars);

        $this->view->redirect('/');
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
        $user = new Account();
        $errors = $user->check($vars, $repeated_pass);
        if ($errors) {
            $user->create($vars);
        }

        if ($this->checkAuth('admin'))
            $this->view->redirect('/admin');

        $this->view->redirect('/');
    }

}