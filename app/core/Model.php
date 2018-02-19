<?php

namespace app\core;

use app\lib\DB;

class Model {

	public $db;
	
	public function __construct() {
		$this->db = new DB;
	}
	
}