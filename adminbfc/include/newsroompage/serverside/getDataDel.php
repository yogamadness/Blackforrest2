<?php
include '../../global/koneksi.php';

 

$id = $_GET['id'];

$arr = array();

$query = mysql_query("SELECT * FROM newsroom where id_news = '$id'");

while ($obj = mysql_fetch_array($query)) {
	$arr[] = $obj;
}

echo json_encode($arr);

?>