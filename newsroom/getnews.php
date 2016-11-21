<?php 
 include '../config/koneksi.php';

 $arr = array();
  $query = mysql_query("SELECT * from newsroom");

  while ($obj = mysql_fetch_array($query)) {
  	 $arr[] = $obj;
  }


  echo  json_encode($arr);




?>