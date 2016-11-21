<?php 
include "../../global/koneksi.php";


if($_SERVER['REQUEST_METHOD'] =="POST"){
	$username 		=  $_POST['username']; // Get the username
	$password 		=  md5($_POST['password']); // Get the password and decrypt it
	$query			= mysql_query("SELECT * FROM admins WHERE username = '".$username."' AND password = '".$password."' "); // Check the table with posted credentials
	//$query = mysql_query("select * from login where Username = '$username' and Password='$Password");
	
	$num_rows		= mysql_num_rows($query); // Get the number of rows
	if($num_rows <= 0){ // If no users exist with posted credentials print 0 like below.
		echo 0;
	} else {
		$fetch = mysql_fetch_array($query);
		// NOTE : We have already started the session in the library.php
		
		$_SESSION['username'] 	 = $fetch['username'];
		$_SESSION['level']       =  $fetch['level'];
	   	$_SESSION['nama_lengkap'] = $fetch['nama_lengkap'];
		echo 1;
	}
  


}

?>