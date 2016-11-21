$(document).ready(function(){



 $('#submit').click(function(){

 			var location = document.URL;
 			
 			
 				//console.log('lgi di index');

 				var email = $('#email').val();
 				var rootFolder = "Blackforrest2";
 				var root = document.location.hostname + rootFolder;
 				//console.log(root);
 				

 					
 					$.post("subscribe/addSubscription.php",{email : email},function(message){
 					
 					}).fail(function(){
 						{

 						alert('fail');
 					};

 					});

 	
 });
 	


});