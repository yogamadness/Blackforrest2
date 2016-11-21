$('document').ready(function(){

	$('#submit').click(function(){
		$('#errornotif').css('margin-left','5%');
		
		var  username  = $('#username');
		var  password  = $('#password');
		if(username.val() == ""){

			$('#errornotif').html('Please fill username');
			return false;
		}

		if(password.val() == ""){
			$('#errornotif').html('Please fill password');
			return false;
		}



		if(username.val()  != '' && password.val()  != ''){ // Check the username and password values is not empty and make the ajax request

				$.post("include/loginpage/serverside/loginController.php", $('form').serialize(), function(message){
					if(message == 0){
						$('#errornotif').css('margin-left','5%');
						$('#errornotif').html('Username or Password incorrect');
				}
				else if(message == 1){
					window.location = 'index.php';
				}
				else{
					alert('Problem with sql query');
				}

				});
				
		}
		return false;
	});
		
	
});