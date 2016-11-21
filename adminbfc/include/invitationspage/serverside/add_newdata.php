<?php
include '../../global/koneksi.php';

if(isset($_POST['albumname'])){
	$today= date("Y-m-d");

	$albumname = $_POST['albumname'];
    $albumcategory = $_POST['album-category'];

    //image upload
    $dirUpload = '../../../uploads/';
  	$rand      = rand(1,99);


    //cover
    $imgCover  =  basename($_FILES["imgCover"]["name"]);
    $coverName = $rand.$imgCover;
    $uploads = $dirUpload.$coverName;

     //image 1
    $img1 = basename($_FILES["img1"]["name"]);
    $newimage1 = $rand.$img1;
    $uploads2 = $dirUpload.$newimage1;

    
     if(move_uploaded_file($_FILES["imgCover"]["tmp_name"],$uploads)){
     	if(move_uploaded_file($_FILES["img1"]["tmp_name"],$uploads2)){

     		$query = mysql_query("INSERT into invitation values(DEFAULT,'$albumcategory','$albumname','$today','$coverName','$newimage1')");

     		if($query == false){
    				 		die(mysql_error());
    				 	}else{
    				 		echo 'success';
    				 		header("Location: ../../../page/invitations.php");
    				 	    exit();
                        }

     	}else{
     			echo 'Eror upload image 1';
     	}

     }else{
     	echo 'Eror upload image Cover';
     }

}





?>