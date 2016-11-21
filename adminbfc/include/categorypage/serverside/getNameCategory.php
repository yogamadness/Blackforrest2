<?php
 include '../../global/koneksi.php';

 $arr = array();
 $id = $_GET['id'];



 $query = mysql_query("SELECT * from category where id_category = '$id' order by id_category");

 if($query === false){
 	die(mysql_error());
 }

 while ($obj =  mysql_fetch_array($query)) {
 	 $arr[] = $obj;
 }


 echo json_encode($arr);

?>