<?php

namespace app\controllers;

use app\core\Controller;

class UserController extends Controller {

    public function show($id) {
        $vars = [
            'id' => $id,
        ];

        $users = $this->model->find($vars);
        $user = $users[0];


        return json_encode($user);

    }

}