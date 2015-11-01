<?php

class Device{
	
	public function add_device($mac,$ip,$type,$name,$details){
		global $pdo;
		//$query = $pdo->prepare("INSERT INTO deviceList (mac,ip,type,name,details) values(?,?,?,?,?)");
		$query = $pdo->prepare("INSERT INTO deviceList (mac,ip,type,name,details) values(?,?,?,?,?) ON DUPLICATE KEY UPDATE details='" .$details. "', mac='" .$mac. "', ip='" .$ip. "', type='" .$type. "'  ");
		$query->bindValue(1,$mac);
		$query->bindValue(2,$ip);
		$query->bindValue(3,$type);
		$query->bindValue(4,$name);
		$query->bindValue(5,$details);

		// $query->bindValue(6,$mac);
		// $query->bindValue(7,$ip);
		// $query->bindValue(8,$type);
		// $query->bindValue(9,$name);
		// $query->bindValue(10,$details);
		
		$query->execute();
	}
	
	
	
	public function get_all_devices(){
		global $pdo;
		$query = $pdo->prepare("SELECT * FROM deviceList");
		$query->execute();
		return $query->fetchAll();
	}

	public function get_components($name){
		global $pdo;
		$query = $pdo->prepare("SELECT details FROM deviceList WHERE name = ?");
		$query->bindValue(1,$name);
		$query->execute();
		return $query->fetch();

	}
	
	public function get_controls($ip){
		global $pdo;
		$query = $pdo->prepare("SELECT details FROM deviceList WHERE ip = ?");
		$query->bindValue(1,$ip);
		$query->execute();
		return $query->fetch();

	}

	
	public function get_ip($name){
		global $pdo;
		$query = $pdo->prepare("SELECT ip FROM deviceList WHERE name = ?");
		$query->bindValue(1,$name);
		$query->execute();
		return $query->fetch();

	}


}


?>
