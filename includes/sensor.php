<?php

class Sensor{
	
	public function add_feed($type,$name,$delay,$data){
		global $pdo;
		$query = $pdo->prepare("INSERT INTO SensorData (type,name,delay,data) values(?,?,?,?)");
		$query->bindValue(1,$type);
		$query->bindValue(2,$name);
		$query->bindValue(3,$delay);
		$query->bindValue(4,$data);
		$query->execute();
	}


?>
