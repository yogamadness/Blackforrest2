<?php
 include '../../global/koneksi.php';



 $id = $_POST['id'];
 $namaCategory = $_POST['namaCategory'];


 $query = mysql_query("UPDATE category set name_category = '$namaCategory' where id_category = '$id'");

 if($query === false){
 	die(mysql_error());
 	echo '0';
 }else{

 	echo '1';
 }

?>