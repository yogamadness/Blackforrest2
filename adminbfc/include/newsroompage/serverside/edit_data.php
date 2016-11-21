<?php 

include '../../global/koneksi.php';

if(isset($_POST['newstitle'])){



    $today= date("Y-m-d");

	$title = $_POST['newstitle'];
    $content = $_POST['content'];


	$id = $_POST['id'];

	$dirUpload = '../../../uploads/';

	$rand      = rand(1,99);


	$imageCoverLama = $_POST['imageCoverLama'];

	if($_FILES['imgCover']['size'] == 0 ){
		
		$query = mysql_query("UPDATE newsroom set title ='$title',content = '$content' where id_news = '$id'");
	
		if($query === false){
			die(mysql_error());
		}else{


			header("Location: ../../../page/newsroom.php");
    	    exit();
		}


	}else if($_FILES['imgCover']['size'] != 0){

		$imgCover  = basename($_FILES["imgCover"]["name"]);
		$coverName = $rand.$imgCover;
		$uploads = $dirUpload.$coverName;

		if(unlink($dirUpload.$imageCoverLama)){

			if(move_uploaded_file($_FILES["imgCover"]["tmp_name"], $uploads)){
				$query = mysql_query("UPDATE newsroom set title ='$title', content = '$content', banner_image = '$coverName' where id_news = '$id'");
				if($query === FALSE){
					die(mysql_error());
				}else{
					header("Location: ../../../page/newsroom.php");
    	    		exit();
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