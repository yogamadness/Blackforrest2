<?php
include '../../global/koneksi.php';

 

$id = $_GET['id'];

$arr = array();

$query = mysql_query("SELECT * FROM photobook where id_product = '$id'");

while ($obj = mysql_fetch_array($query)) {
	$arr[] = $obj;
}

echo json_encode($arr);

?>