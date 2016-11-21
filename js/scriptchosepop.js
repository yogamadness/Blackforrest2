$(function(){

	// If no url property is passed, the
	// href attribute will be used
	

  /*jumlah b tergantung banyak product, kalau productnya nambah tambah juga b nya*/	
	$('#b1').frameWarp();
	
	
	
	$('#b3').frameWarp();
	$('#b4').frameWarp();
	$('#b5').frameWarp();
	$('#b6').frameWarp();
	$('#b7').frameWarp();
	$('#b8').frameWarp();
	$('#b9').frameWarp();
	$('#b10').frameWarp();
	$('#b11').frameWarp();
	$('#b12').frameWarp();
	$('#b13').frameWarp();

	$('#b2').frameWarp({
		onMessage: function(msg){
			$('#messages').append('<b>Message Received:</b> '+ msg+'<br />');
		}
	});
   /*
	// Cache is enabled by default
	$('#b3').frameWarp({
		url : 'http://www.cnn.com/'
	});

	// Disable caching
	$('#b4').frameWarp({
		url : 'http://www.cnn.com/',
		cache:false
	});*/
});