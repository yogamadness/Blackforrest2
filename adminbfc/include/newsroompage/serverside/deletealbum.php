<?php
include '../../global/koneksi.php';

 $id = $_POST['id'];
 $banner_image = $_POST['banner_image'];
 

 $dirUpload = '../../../uploads/';

 if(unlink($dirUpload.$banner_image) ){

 	$query = mysql_query("DELETE FROM newsroom where id_news = '$id'");

 	if($query == FALSE){
 		die(mysql_error());
 	}else{
 		echo '1';
 	}

 }else{
 	echo '0';
 }



?>