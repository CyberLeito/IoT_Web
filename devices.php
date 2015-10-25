


<!DOCTYPE HTML>
<html>
  <head>
    <script src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>

	<?php
		include_once('includes/dbcon.php');
		include_once('includes/device.php');
		$ip = $_POST["ip"];


		echo "<input id='ip' hidden value='". $ip."'>";
		$deviceObj = new Device;
	
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
		echo "</table>";
	?>

	<script type="text/javascript">
		$(document).ready(function(){
			$(".led").click(function(){
				// get id value (i.e. pin13, pin12, or pin11)
				var p = $(this).attr('id'); 
				
				// send HTTP GET request to the IP address with the parameter "pin" and value "p", then execute the function
				ip = $("#ip").attr('value');
				
				//$.get("http://monitor.noip.me:91/", {pin:p}); // execute get request
				
				$.post( "control.php", {ip:ip, pin:p}, function( result ) {
					//$( "#result" ).html( result );
				});
			});
		});
	</script>





    <!--div align="center">
		 <img src="http://monitor.noip.me:8081"/>
                <br>
                <br>	
		<input id="ip" hidden value="<?php echo $ip; ?>">
		
 		<table align="center" id="deviceList">
			<tr><td><button id="11" class="led">GREEN</button></td></tr>
			<tr><td><button id="12" class="led">RED</button></td></tr>
			<tr><td><button id="13" class="led">BLUE</button></td></tr>
		</table>
		<p id="result"></p>
		<script type="text/javascript">
		$(document).ready(function(){
			$(".led").click(function(){
				// get id value (i.e. pin13, pin12, or pin11)
				var p = $(this).attr('id'); 
				
				// send HTTP GET request to the IP address with the parameter "pin" and value "p", then execute the function
				ip = $("#ip").attr('value');
				
				//$.get("http://monitor.noip.me:91/", {pin:p}); // execute get request
				
				$.post( "control.php", {ip:ip, pin:p}, function( result ) {
					$( "#result" ).html( result );
				});
			});
		});
	</script>

	</div-->
  </body>
</html> 
