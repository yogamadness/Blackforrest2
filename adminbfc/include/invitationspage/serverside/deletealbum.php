<?php
include '../../global/koneksi.php';

 $id = $_POST['id'];
 $img_album = $_POST['img_album'];
 $img1  = $_POST['img1'];


 $dirUpload = '../../../uploads/';

 if(unlink($dirUpload.$img_album) && unlink($dirUpload.$img1)){

 	$query = mysql_query("DELETE FROM invitation where id_product = '$id'");

 	if($query == FALSE){
 		die(mysql_error());
 	}else{
 		echo '1';
 	}

 }else{
 	echo '0';
 }



?>