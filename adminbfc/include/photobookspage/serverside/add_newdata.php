<?php
include '../../global/koneksi.php';


if(isset($_POST['albumname'])){
	$today= date("Y-m-d");
	//file post
    $albumname = $_POST['albumname'];
    $albumcategory = $_POST['album-category'];

    //image upload
    $dirUpload = '../../../uploads/';
  	$rand      = rand(1,99);

  	//cover
    $imgCover  =  basename($_FILES["imgCover"]["name"]);
    $coverName = $rand.$imgCover;
    $uploads = $dirUpload.$coverName;
    // move_uploaded_file($_FILES["imgCover"]["tmp_name"],$uploads);
    //image 1
    $img1 = basename($_FILES["img1"]["name"]);
    $newimage1 = $rand.$img1;
    //image 2
    $img2 = basename($_FILES["img2"]["name"]);
    $newimage2 = $rand.$img2;
    //image 3
    $img3 = basename($_FILES["img3"]["name"]);
    $newimage3 = $rand.$img3;


    if(move_uploaded_file($_FILES["imgCover"]["tmp_name"],$uploads)){
    	 $uploads2 = $dirUpload.$newimage1;
    		if(move_uploaded_file($_FILES["img1"]["tmp_name"],$uploads2)){
    	  $uploads3 = $dirUpload.$newimage2;
    			if(move_uploaded_file($_FILES["img2"]["tmp_name"],$uploads3)){
    		$uploads4 = $dirUpload.$newimage3;
    				 if(move_uploaded_file($_FILES["img3"]["tmp_name"],$uploads4)){

    				 	echo 'success upload alll';

    				 	$query = mysql_query("INSERT INTO photobook values(DEFAULT,'$albumcategory','$albumname','$today','$coverName','$newimage1','$newimage2','$newimage3')");

    				 	if($query == false){
    				 		die(mysql_error());
    				 	}else{

    				 		header("Location: ../../../page/photobooks.php");
    				 	    exit();
                        }

    				 }else{
    				 	echo 'Eror upload image 3';

    				 }


    			}else{
    				echo 'Eror upload image 2';

    			}

    		}else{
    			echo 'Eror upload image 1';
    		}

    }else{
    	echo 'Error to upload cover image';
    }

}








?>