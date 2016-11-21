<?php
 include '../../global/koneksi.php';

 $arr = array();

 $query = mysql_query("SELECT * from newsroom order by id_news");

 if($query === false){
 	die(mysql_error());
 }

 while ($obj =  mysql_fetch_array($query)) {
 	 $arr[] = $obj;
 }


 echo json_encode($arr);

?>