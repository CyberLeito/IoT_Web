<?php

class Device{
	
	public function add_device($mac,$ip,$type,$name){
		global $pdo;
		$query = $pdo->prepare("INSERT INTO devices (mac,ip,type,name) values(?,?,?,?)");
		$query->bindValue(1,$mac);
		$query->bindValue(2,$ip);
		$query->bindValue(3,$type);
		$query->bindValue(4,$name);
		$query->execute();
	}
	
	
	
	public function get_all_devices(){
		global $pdo;
		$query = $pdo->prepare("SELECT * FROM devices");
		$query->execute();
		return $query->fetchAll();
	}
}


?>