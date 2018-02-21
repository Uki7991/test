<?php

namespace app\models;

use app\core\Model;

class Gender extends Model {

    /**
     * @return array of all data
     */
    public function all() {
        return $this->db->row('SELECT * FROM genders');
    }

    public function find($id) {
        $params = [
            ':id' => $id,
        ];

        return $this->db->column('SELECT * FROM genders WHERE id = :id', $params);
    }

}