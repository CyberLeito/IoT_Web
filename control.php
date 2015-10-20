<?php
	$ip = $_POST["ip"];
	$pin = $_POST["pin"];

	//$.get("http://monitor.noip.me:91/", {pin:p}); // execute get request
	
	
	//$ip = '192.168.0.110';
	//$pin = '13';
	
	$url = 'http://'.$ip.'/?pin='.$pin;
	
	
	$ctx = stream_context_create(array(
		'http' => array(
			'timeout' => 2
			)
		)
	);
	file_get_contents($url, 0, $ctx);
	
	/*$pin = $data[0];
	$value = $data[1];
	
	system("gpio -g mode $pin out");
	system("gpio -g write $pin $value");
	
	if($value == 1) 
		echo "good morning";
	else 
		echo "good night"*/
?>