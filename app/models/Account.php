<?php

namespace app\models;

use app\core\Model;
use app\core\View;

class Account extends Model {
	
	public function create($params) {
	    $this->db->query('INSERT INTO users (fname, lname, login, mail, date_birth, gender_id, password)
                               VALUES (:fname, :lname, :login, :mail, :date_birth, :gender_id, :password)', $params);
        if (isset($_SESSION['oldvars'])) {
            unset($_SESSION['oldvars']);
        }
    }
    
    public function check($params, $pass) {
        if (isset($_SESSION['oldvars'])) {
            unset($_SESSION['oldvars']);
        }
        $vars = [
            'login' => $params['login'],
        ];
	    $errors = [];
	    if (strlen($params['fname']) <= 2) {
            $errors['fname'] = 'First name will be over than 2 symbols';
        }
        elseif (strlen($params['fname']) >= 15) {
            $errors['fname'] = 'First name will be less than 15 symbols';
        }
	    if (strlen($params['lname']) <= 2) {
            $errors['lname'] = 'Last name will be over than 2 symbols';
        }
        elseif (strlen($params['lname']) >= 15) {
            $errors['lname'] = 'Last name will be less than 15 symbols';
        }
        if (strlen($params['login']) <= 3) {
            $errors['login'] = 'Login will be over than 3 symbols';
        }
        elseif (strlen($params['login']) >= 20) {
            $errors['login'] = 'Login will be less than 20 symbols';
        }
        elseif ($this->db->column('SELECT COUNT(*) FROM users WHERE login=:login', $vars)) {
            $errors['login'] = 'This login is already exists';
        }
	    if (empty($params['date_birth'])) {
            $errors['date_birth'] = 'This input is required';
        }
	    if ($params['password'] != $pass) {
            $errors['pass'] = 'Password do not match!';
        }
        elseif (strlen($params['password']) <= 5) {
                $errors['pass'] = 'Password will be over than 6 symbols';
        }

        $_SESSION['oldvars'] = $params;

	    if (empty($errors)) {
	        if (isset($_SESSION['errors'])) {
	            unset($_SESSION['errors']);
            }
            return true;
        }

        $_SESSION['errors'] = $errors;
        return false;
    }

    public function checkLogin($params) {
	    $errors = '';
	    if (isset($_SESSION['errors'])) {
	        unset($_SESSION['errors']);
        }
        $result = $this->db->row('SELECT * FROM users WHERE login = :login AND password = :password', $params);

        if (empty($result)) {
            $errors = 'These data doesn`t match our records!';
            $_SESSION['errors'] = $errors;
        }
        return $result;
    }

}