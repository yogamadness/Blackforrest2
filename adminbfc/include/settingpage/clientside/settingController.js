$('document').ready(function(){


	$("#submit").click(function(){

		var oldpass = $('#oldpass').val();
		var newpass = $('#newpass').val();
		var confirmpass = $('#confirmpass').val();
		var username = $('#username').val();

		if(oldpass == ''){
			$('#eror').text('Please Fill old password');
		}else if(newpass == ''){
			$('#eror').text('Please fill new pass');

		}else if(confirmpass == ''){
			$('#eror').text('Please fill confirm pass');
		}else if(confirmpass != newpass){
			$('#eror').text('Confirm pass and new pass not match');

		}else{

			$.post('../include/settingpage/serverside/changepass.php',{username:username, oldpass : oldpass , newpass: newpass}, function(message){


				if(message == 0){
					
					$('#eror').text('Wrong old password');
					return false;
				}else {
					window.location.reload();
					return true;
				}


			});



			//return true;
		}
		return false;
	});



});