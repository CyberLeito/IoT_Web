<?php

try{
	$pdo = new PDO('mysql:host=localhost; dbname=monitordb','root','welcome');
		
}catch(PDOExeption $e){
	exit('Database error!');
}

?>