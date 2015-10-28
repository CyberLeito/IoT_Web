<?php

		
		include_once('includes/dbcon.php');
		include_once('includes/device.php');
		
		
    	$deviceObj = new Device;
		
		
		if (isset($_POST["device"])){
			$device = $_POST["device"];
			$result = $deviceObj->get_components($device);
			$controls = $result['details'];
			$controls = substr($controls,0,strlen($controls)-1);
			$controlsArray = explode("!",$controls);   

			//$controls = //TubeLight:12!RedLight:11!Fan:10!

			foreach ($controlsArray as $control) {
				$controlArray = explode(":",$control);
				echo"<option value=".$controlArray[1].">".$controlArray[0]."</option>";
			}
		}
		else{
			$list = $deviceObj->get_all_devices();
			echo"<option class='redClass' value='0'>Select a device</option>";
			foreach ($list as $item){
				 echo"<option value=".$item['name'].">".$item['name']."</option>";

			}
		}
		
			

		/*echo "<input id='ip' hidden value='". $ip."'>";
	
		$result = $deviceObj->get_controls($ip);
		$controls = $result['details'];
		$controls = substr($controls,0,strlen($controls)-1);
		$controlsArray = explode("!",$controls);   

		//$controls = //TubeLight:12!RedLight:11!Fan:10!
		echo "<table  align='center' id='controlList'>";

		foreach ($controlsArray as $control) {
			$controlArray = explode(":",$control);
			echo "<tr><td><button id=".$controlArray[1]." class='led'>".$controlArray[0]."</button></td></tr>";
		}
		echo "</table>";*/
		
		
		
		
		?>