<?php
	
	include_once('includes/dbcon.php');
	include_once('includes/device.php');
	
	$deviceObj = new Device;
	
	$devices = $deviceObj->get_all_devices();
	
	echo "<tr>
		<th>Device ID</th>
		<th>Type</th>
		<th>IP address</th>
		<th>Action</th>
	    </tr>";

	foreach ($devices as $dev) {
	
		echo "<tr>
				<td>".$dev['name']."</td>
				<td>".$dev['type']."</td>
				<td>".$dev['ip']."</td>
				<td>
					<form action='devices.php' method='post'>
					  	<input hidden type='text' name='ip' value='".$dev['ip']."'>
					  	<input type='submit' value='Open'>
					</form> 
				</td>
			</tr>";
	}
	
	
	//<button onclick=\"location.href = 'devices.php?ip=".$dev['ip']."';\">Check</button>
	
	
	
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
