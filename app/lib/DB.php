<?php

namespace app\lib;

use PDO;

class DB {
	
	protected $db;

	public function __construct() {
		$config = require 'app/conf/db.php';
		$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['dbname'], $config['login'], $config['password']);
		$this->db->exec("set names " . $config['charset']);
	}

	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}

}