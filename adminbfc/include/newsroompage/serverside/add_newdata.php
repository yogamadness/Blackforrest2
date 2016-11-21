<?php 
include '../../global/koneksi.php';

if(isset($_POST['newstitle'])){
	$today= date("Y-m-d");

	$newstitle = $_POST['newstitle'];
	$content = $_POST['content'];

	$dirUpload = '../../../uploads/';
  	$rand      = rand(1,99);

  	$imagebanner = basename($_FILES['imgCover']['name']);
  	$coverName = $rand.$imagebanner;


  	$uploads = $dirUpload.$coverName;

  	if(move_uploaded_file($_FILES["imgCover"]["tmp_name"],$uploads)){

  		$query = mysql_query("INSERT into newsroom values(DEFAULT,'$newstitle','$content','$coverName','$today')");

  		if($query === false){
  			die(mysql_error());
  		}else{
  			echo 'Success';
  			header("Location: ../../../page/newsroom.php");
    		exit();
  		}


  	}else{

  		echo 'Eror upload image';
  	}



}




?>