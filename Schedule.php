


<!DOCTYPE HTML>
<html>
  <head>
    <script src="jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
	
	<style>
		.redClass{color:red;}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$.post( "getDevices.php", function( result ) {
					$( "#devDrop" ).html( result );
			});
			
			
			$("#devDrop").change(function(){
				dev = $( this ).val();
				if(dev!="0"){
					$.post( "getDevices.php",{device:dev}, function( result ) {
						$( "#compDrop" ).html( result );
					});
				}
			});
			
			$("#munawwar").click(function(){
				dev = $( "#devDrop option:selected" ).val();
				com = $( "#compDrop option:selected" ).val();
				console.log(com + " " + dev);
			});
			
			
		});
	</script>
  </head>
  <body>
	<select id ='devDrop'></select><br><br>
	<select id ='compDrop'></select><br><br>
	<button id ='munawwar'>Submit</button>

	


  </body>
</html> 
