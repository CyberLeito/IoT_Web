<?php
	$data = $_GET["data"];
	//AT CIFSR CIFSR:STAIP,192.168.0.106 CIFSR:STAMAC,18:fe:34:f2:e5:16OKCIFSRTestProbe1CIFSRSensor
	//AT CIFSR192.168.0.107OKCIFSRProMiniToyCIFSRSwitchCIFSRLight9:9!Light7:7!Light10:10!Light12:12!

	 $file = 'people.txt';
	 file_put_contents($file, $data."\n");
	
	$data = str_replace("OK","",$data);
	$dataArr = explode("CIFSR",$data);
	
	$ip = $dataArr[1];
	//$mac = str_replace(":STAMAC,","",$dataArr[2]); //NO FUCKING MAC FROM STOCK FIRMWARE >.<
	$mac = "";
	$name = $dataArr[2];
	$type = $dataArr[3];
	$details = $dataArr[4]; // TubeLight:12!RedLight:11!Fan:10!
	
	 // $hex = 'sep.txt';
	 // file_put_contents($hex, $ip."\n");
	 // $fhex = 'next.txt';
	 // file_put_contents($fhex, $ip."\n" $details."\n");
	 
	

	//$devAll = explode("!",$dataArr[6]);   
	
	///////////////////////////////////////////////////////////////
	// do
    // $dev[i]=explode(":",$devAll[i]);
	// while(devAll[i]=="")
	//	i++
    //$i=1;
	//do {
    //$dev[i]=explode(":",$devAll[i]);
		
	//	i++;
	//} while (devAll[i]);

	
	
	//file_put_contents($file, $detailed."\n");
	
	
	include_once('includes/dbcon.php');
	include_once('includes/device.php');
	
	if($data=="clear"){
		
	}else{
		$device = new Device;
		$device->add_device($mac,$ip,$type,$name,$details);
	}
	
	//$log = $ip." / ".$mac."<br>";
		//file_put_contents($file, $log, FILE_APPEND);
	//file_put_contents($file, "");
	//$data = "AT CIFSR CIFSR:STAIP,192.168.0.103 CIFSR:STAMAC,18:fe:34:f3:b4:d2OK";
	
	//$file = 'connections.txt';
	
	//AT CIFSR CIFSR:STAIP,192.168.0.103 CIFSR:STAMAC,18:fe:34:f3:b4:d2OK
?>
