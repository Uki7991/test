<?php

namespace app\models;

use app\core\Model;

class User extends Model {

    public function all() {
        $result = $this->db->row('SELECT users.*, genders.name AS gender_name FROM users INNER JOIN genders ON users.gender_id = genders.id ORDER BY users.id DESC');
        return $result;
    }

    public function find($vars) {
        $result = $this->db->row('SELECT * FROM users WHERE id = :id', $vars);
        return $result;
    }

}