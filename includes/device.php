<?php

class Device{
	
	public function add_device($mac,$ip,$type,$name,$details){
		global $pdo;
		$query = $pdo->prepare("INSERT INTO deviceList (mac,ip,type,name,details) values(?,?,?,?,?)");
		$query->bindValue(1,$mac);
		$query->bindValue(2,$ip);
		$query->bindValue(3,$type);
		$query->bindValue(4,$name);
		$query->bindValue(5,$details);

		$query->execute();
	}
	
	
	
	public function get_all_devices(){
		global $pdo;
		$query = $pdo->prepare("SELECT * FROM deviceList");
		$query->execute();
		return $query->fetchAll();
	}

	public function get_controls($ip){
		global $pdo;
		$query = $pdo->prepare("SELECT details FROM deviceList WHERE ip = ?");
		$query->bindValue(1,$ip);
		$query->execute();
		return $query->fetch();

	}



}


?>
