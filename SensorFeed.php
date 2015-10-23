<?php 
	$data = $_GET["feed"]; 
	$FeedArr = explode("!",$data);


		// SensorCOmponentName!DeviceName!data!data!data!data!data!data!data!data!data!data!

	$type = $FeedArr[0];
	$NAME = $FeedArr[1];
	
	//Foreach loop starting from 2 till end		
	$data = $FeedArr[2];	
	
	
	include_once('includes/dbcon.php');
	include_once('includes/sensor.php');


	$sensorObj = new Sensor;
//	$device->add_device($mac,$ip,$type,$name,$details);
	













?>
