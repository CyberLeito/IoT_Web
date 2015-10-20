$(document).ready(function(){
	$.post( "view.php", function( data ) {
		$( "#deviceList" ).html( data );
	});
		
	$(".buttons").click(function(){
		v = this.id;
		$.post( "py.php", {data: v}, function( data ) {
			$( ".result" ).html( data );
		});
	});
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

});
