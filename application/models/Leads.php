<?php

namespace application\models;
use application\core\Model;

class Leads extends Model{

	public function getLeads($database) {
		$result = $this->db->row('SELECT * FROM '.$database);
		return $result;
	}

	public function deleteLead($post){
		$result = $this->db->query('DELETE FROM '.$post['database'].' WHERE phone = \''.$post['phone'].'\'');
		return $result;
	}
}