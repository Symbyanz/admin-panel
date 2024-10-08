<?php

namespace application\models;
use application\core\Model;

class Codes extends Model{
	public function getCodes($database){
		$result = $this->db->row('SELECT * FROM '.$database);
		return $result;
	}

	public function addCode($code) {
		$params = ['value' => mb_strtoupper($code['add']),];
		$this->db->query('INSERT INTO '.$code['database'].' VALUES (:value)', $params);
		return true; 
	}

	public function deleteCode($post){
		$result = $this->db->query('DELETE FROM '.$post['database'].' WHERE value = \''.$post['value'].'\'');
		return $result;
	}

	public function truncateCodes($database){
		$result = $this->db->query('TRUNCATE TABLE '.$database);
	}
}