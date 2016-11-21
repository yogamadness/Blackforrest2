<?php
include '../../global/koneksi.php';

 $id = $_POST['id'];
 $img_album = $_POST['img_album'];
 $img1  = $_POST['img1'];
 $img2  = $_POST['img2'];
 $img3  = $_POST['img3'];

 $dirUpload = '../../../uploads/';

 if(unlink($dirUpload.$img_album)){

 		if(unlink($dirUpload.$img1) ){

 				if(unlink($dirUpload.$img2)){



 								$query = mysql_query("DELETE FROM photobook where id_product = '$id'");

							 	if($query == FALSE){
							 		die(mysql_error());
							 	}else{
							 		echo '1';
							 	}




	 					if(unlink($dirUpload.$img3)){

	 							

			 			}else{

			 					

			 			}
 			

 				}else {
 						echo'0';
 				}

		 }else{
 	    echo '0';
 		} 
	
	}else{
 	echo '0';
 }



?>