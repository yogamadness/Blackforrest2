<?php
 include '../../global/koneksi.php';


 $id = $_GET['id'];
 $arr = array();

 $query = mysql_query("SELECT * from newsroom where id_news='$id' order by id_news");

 if($query === false){
 	die(mysql_error());
 }

 while ($obj =  mysql_fetch_array($query)) {
 	 $arr[] = $obj;
 }


 echo json_encode($arr);

?>