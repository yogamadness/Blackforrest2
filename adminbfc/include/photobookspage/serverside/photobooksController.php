<?php 
include "../../global/koneksi.php";

$arr = array();


$query = mysql_query("SELECT pb.*,ct.name_category FROM photobook pb,category ct where pb.id_category = ct.id_category  order by `product_name`");

if($query === FALSE){
	die(mysql_error());
}


while ($obj = mysql_fetch_array($query)) {
	$arr[] = $obj;
}


echo json_encode($arr);

?>