<?php
	$ip = $_GET["ip"];
?>


<!DOCTYPE HTML>
<html>
  <head>
    <script src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
  </head>
  <body>
    <div align="center">
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

	</div>
  </body>
</html> 
