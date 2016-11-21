<?php 
 include '../config/koneksi.php';

 
 	$email = $_POST['email'];

 	$query = mysql_query("INSERT INTO subscribe values(DEFAULT,'','".$email."')");

 	if($query === FALSE){
 		die(mysql_error());
 		echo 0;
 	}else{

 		//header('Location: '.$_SERVER['PHP_SELF']);
		//die;
 	}

 

?>