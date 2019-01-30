<?php
require_once('Database.php');
class Model extends Database{
	public function create($table,$data){
		$sql = "";
		$sql .="INSERT INTO ".$table." (".implode(",", array_keys($data)).") VALUES (:".implode(", :", array_keys($data)).")";
		$stmt = $this->con->prepare($sql);
		foreach($data as $field => $value) {
			$binding[':'.$field]=htmlspecialchars(strip_tags($value));
		}
		if($stmt->execute($binding))
		{echo "Record saved";}
		else
		{echo "Failed !Try again";}
	}
}



