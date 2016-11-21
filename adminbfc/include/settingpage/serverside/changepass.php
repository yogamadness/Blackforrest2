<?php 
include '../../global/koneksi.php';


$oldpass = md5($_POST['oldpass']);
$newpass = md5($_POST['newpass']);
$username = $_POST['username'];

$querycheck = mysql_query("SELECT password from admins where password = '$oldpass' and username = '$username'");

if($querycheck === false){
	die(mysql_error());
}

if(mysql_fetch_row($querycheck) == 0){
	echo '0';
}else{
	
	$query = mysql_query("UPDATE admins set password = '$newpass' where username = '$username'");

	if($query === false){

		die(mysql_error());

	}else{


	}
	echo '1';

}


?>