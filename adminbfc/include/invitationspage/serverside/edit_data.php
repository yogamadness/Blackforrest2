<?php 

include '../../global/koneksi.php';

if(isset($_POST['albumname'])){



    $imageCoverLama = $_POST['imgCoverLama'];
	$image1lama = $_POST['img1Lama'];


	$albumname = $_POST['albumname'];
	$catergory = $_POST['album-category'];
	$id = $_POST['id'];


	$dirUpload = '../../../uploads/';


	$rand      = rand(1,99);


	if($_FILES['imgCover']['size'] == 0 && $_FILES['img1']['size'] == 0){
		
		$query = mysql_query("UPDATE invitation set product_name ='$albumname',id_category = '$catergory' where id_product = '$id'");
	
		if($query === false){
			die(mysql_error());
		}else{


			header("Location: ../../../page/invitations.php");
    	    exit();
		}


	}else if($_FILES['imgCover']['size'] != 0 && $_FILES['img1']['size'] == 0){

		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$coverName = $rand.$imgCover;
		$uploads = $dirUpload.$coverName;
		if(unlink($dirUpload.$imageCoverLama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				$query = mysql_query("UPDATE invitation set product_name ='$albumname', id_category = '$catergory', img_album = '$coverName' where id_product = '$id'");
				if($query === FALSE){
					die(mysql_error());
				}else{
					header("Location: ../../../page/invitations.php");
    	    		exit();
				}

			}else{
				echo 'eror uploads';
			}


		}else{
			echo 'eror remove file lama';
		} 

	}else if($_FILES['imgCover']['size'] != 0 && $_FILES['img1']['size'] != 0 ){

		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$img1      = basename($_FILES["img1"]["name"]);
		$coverName = $rand.$imgCover;
		$img1Name = $rand.$img1;

		$uploads = $dirUpload.$coverName;
		$uploads2 = $dirUpload.$img1Name;

		if(unlink($dirUpload.$imageCoverLama) && unlink($dirUpload.$image1lama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				
				if(move_uploaded_file($_FILES["img1"]["tmp_name"], $uploads2)){

					$query = mysql_query("UPDATE invitation set product_name ='$albumname', id_category = '$catergory', img_album = '$coverName',img1 = '$img1Name' where id_product = '$id'");
					
					if($query === FALSE){
					die(mysql_error());
					}else{
						
					header("Location: ../../../page/invitations.php");
    	    		exit();
					}

				}else{
					echo 'eror upload 1';
				}

			}else{
				echo 'eror uploads';
			}


		}else{
			echo 'eror remove file lama';
		} 

	}


}




?>