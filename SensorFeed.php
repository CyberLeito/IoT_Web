<?php

	$data = $_GET["feed"]; 
	
	include_once('includes/dbcon.php');
	include_once('includes/sensor.php');

	$SensorObj = new Sensor;
	
	$FeedArr = explode("!",$data);


		// SensorCOmponentName!DeviceName!timedelay!data!data!data!data!data!data!data!data!data!data!

	$type = $FeedArr[0];
	$name = $FeedArr[1];
	$delay = $FeedArr[2];
	
	//Foreach loop starting from 3 till end		
		
		
	$cnt = 0;
	foreach($FeedArr as $val){
		if ($cnt >=3){
			$SensorObj ->add_feed($type,$name,$delay,$val);
		}
		$cnt++;
	}
	
	

//	$device->add_device($mac,$ip,$type,$name,$details);
	













?>
