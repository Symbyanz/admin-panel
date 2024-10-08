<?php

namespace application\lib;
use PDO;
// use mysqli;

class Db {
	protected $db;

	public function __construct(){
		$config = require 'application/config/db.php';

		try{
			$this->db = new PDO('mysql:host='.$config['host'].';dbname='.$config['database'], $config['user'], $config['password']); 
		} catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			exit();
		}
	}

	public function query($sql, $params = []) {
		$stmt = $this->db->prepare($sql);
		if(!empty($params)){
			foreach($params as $key => $val){
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
	}

	public function row($sql, $params = []){
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}

	public function column($sql, $params = []){
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
	}
}