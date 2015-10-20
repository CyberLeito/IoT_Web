<?php
	
	include_once('includes/dbcon.php');
	include_once('includes/device.php');
	
	$device = new Device;
	
	$devices = $device->get_all_devices();
	
	echo "<tr><th>Device ID</th><th>IP address</th><th>Action</th></tr>";

	foreach ($devices as $dev) {
	
		echo "<tr>
				<td>".$dev['name']."</td>
				<td>".$dev['ip']."</td>
				<td>
					<button onclick=\"location.href = 'device.php?ip=".$dev['ip']."';\">Check</button>
				</td>
			</tr>";
	}
	
	
	
	
	
	
		//$file = 'connections.txt';
	
	//$data = file_get_contents($file);
	
	//	$dataArr = explode("<br>", $data);
						
	/*
	foreach ($dataArr as $device) {
		if($device!=null){
			$deviceArr = explode("/", $device);
			echo "<tr>
					<td>Device 1</td>
					<td>".$deviceArr[0]."</td>
					<td>
						<button onclick=\"location.href = 'device.php?ip=$deviceArr[0]';\">Check</button>
					</td>
				</tr>";
		}
		
	}*/
		
?>