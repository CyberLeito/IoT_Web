<?php

class Sensor{
	
	public function add_feed($type,$name,$feed){
		global $pdo;
		$query = $pdo->prepare("INSERT INTO Sen (type,name,feed) values(?,?,?,?,?)");
		$query->bindValue(1,$type);
		$query->bindValue(2,$name);
		$query->bindValue(3,$feed);

		$query->execute();
	}


?>
