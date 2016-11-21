<?php 
include '../../global/koneksi.php';

if(isset($_POST['albumname'])){

	
	//penanda albumya diisi engga
	/*$markCover = $_POST['markCover'];
	$mark1 = $_POST['mark1'];
	$mark2 = $_POST['mark2'];
	$mark3 = $_POST['mark3']; */

	//image yang lama 
	$imageCoverLama = $_POST['imgCoverLama'];
	$image1lama = $_POST['img1Lama'];
	$image2lama = $_POST['img2Lama'];
	$image3lama = $_POST['img3Lama'];



	$albumname = $_POST['albumname'];
	$catergory = $_POST['album-category'];
	$id = $_POST['id'];

	$dirUpload = '../../../uploads/';
	//$path = realpath("/uploads/");
	
  	$rand      = rand(1,99);

	//image baru
	if($_FILES['imgCover']['size'] == 0 && $_FILES['img1']['size'] == 0 && $_FILES['img2']['size'] == 0 && $_FILES['img3']['size'] == 0 ){
		
		$query = mysql_query("UPDATE photobook set product_name ='$albumname',id_category = '$catergory' where id_product = '$id'");
	
		if($query === false){
			die(mysql_error());
		}else{


			header("Location: ../../../page/photobooks.php");
    	    exit();
		}


	}else if($_FILES['imgCover']['size'] != 0 && $_FILES['img1']['size'] == 0 && $_FILES['img2']['size'] == 0 && $_FILES['img3']['size'] == 0){

		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$coverName = $rand.$imgCover;
		$uploads = $dirUpload.$coverName;
		if(unlink($dirUpload.$imageCoverLama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				$query = mysql_query("UPDATE photobook set product_name ='$albumname', id_category = '$catergory', img_album = '$coverName' where id_product = '$id'");
				if($query === FALSE){
					die(mysql_error());
				}else{
					header("Location: ../../../page/photobooks.php");
    	    		exit();
				}

			}else{
				echo 'eror uploads';
			}


		}else{
			echo 'eror remove file lama';
		} 

	}else if($_FILES['imgCover']['size'] != 0 && $_FILES['img1']['size'] != 0 && $_FILES['img2']['size'] == 0 && $_FILES['img3']['size'] == 0){

		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$img1      = basename($_FILES["img1"]["name"]);
		$coverName = $rand.$imgCover;
		$img1Name = $rand.$img1;

		$uploads = $dirUpload.$coverName;
		$uploads2 = $dirUpload.$img1Name;
		if(unlink($dirUpload.$imageCoverLama) && unlink($dirUpload.$image1lama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				
				if(move_uploaded_file($_FILES["img1"]["tmp_name"], $uploads2)){

					$query = mysql_query("UPDATE photobook set product_name ='$albumname', id_category = '$catergory', img_album = '$coverName',img1 = '$img1Name' where id_product = '$id'");
					
					if($query === FALSE){
					die(mysql_error());
					}else{
					header("Location: ../../../page/photobooks.php");
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

	}else if($_FILES['imgCover']['size'] != 0 && $_FILES['img1']['size'] != 0 && $_FILES['img2']['size'] != 0 && $_FILES['img3']['size'] == 0){
		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$img1      = basename($_FILES["img1"]["name"]);
		$img2      = basename($_FILES["img2"]["name"]);

		$coverName = $rand.$imgCover;
		$img1Name = $rand.$img1;
		$img2Name = $rand.$img2;


		$uploads = $dirUpload.$coverName;
		$uploads2 = $dirUpload.$img1Name;
		$uploads3 = $dirUpload.$img2Name;

		if(unlink($dirUpload.$imageCoverLama) && unlink($dirUpload.$image1lama) && unlink($dirUpload.$image2lama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				
				if(move_uploaded_file($_FILES["img1"]["tmp_name"], $uploads2)){

					if(move_uploaded_file($_FILES["img2"]["tmp_name"],$uploads3)){
						$query = mysql_query("UPDATE photobook set product_name ='$albumname', id_category = '$catergory', img_album = '$coverName',img1 = '$img1Name',img2 = '$img2Name' where id_product = '$id'");
					
						    if($query === FALSE){
							die(mysql_error());
							}else{
							header("Location: ../../../page/photobooks.php");
		    	    		exit();
							}

					}else{
						echo 'eror upload 2';
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


	}else if($_FILES['imgCover']['size'] != 0 && $_FILES['img1']['size'] != 0 && $_FILES['img2']['size'] != 0 && $_FILES['img3']['size'] != 0){
		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$img1      = basename($_FILES["img1"]["name"]);
		$img2      = basename($_FILES["img2"]["name"]);
		$img3  	   = basename($_FILES["img3"]["name"]);

		$coverName = $rand.$imgCover;
		$img1Name = $rand.$img1;
		$img2Name = $rand.$img2;
		$img3Name = $rand.$img3;


		$uploads = $dirUpload.$coverName;
		$uploads2 = $dirUpload.$img1Name;
		$uploads3 = $dirUpload.$img2Name;
		$uploads4 = $dirUpload.$img3Name;
		if(unlink($dirUpload.$imageCoverLama) && unlink($dirUpload.$image1lama) && unlink($dirUpload.$image2lama) && unlink($dirUpload.$image3lama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				
				if(move_uploaded_file($_FILES["img1"]["tmp_name"], $uploads2)){

					if(move_uploaded_file($_FILES["img2"]["tmp_name"],$uploads3)){
						
						 if(move_uploaded_file($_FILES["img3"]["tmp_name"],$uploads4)){
						 		$query = mysql_query("UPDATE photobook set product_name ='$albumname', id_category = '$catergory', img_album = '$coverName',img1 = '$img1Name',img2 = '$img2Name',img3 = '$img3Name' where id_product = '$id'");
					
							    if($query === FALSE){
								die(mysql_error());
								}else{
								header("Location: ../../../page/photobooks.php");
			    	    		exit();
								}

						 }else{

						 	echo 'Eror upload';
						 }

					}else{
						echo 'eror upload 2';
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