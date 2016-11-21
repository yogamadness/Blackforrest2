<?php
 include '../../global/koneksi.php';

 $id = $_POST['id'];



 $query = mysql_query("DELETE FROM category where id_category = '$id'");

 if($query === false){
 	die(mysql_error());
 }


?>