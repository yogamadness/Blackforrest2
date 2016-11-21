<?php 
include '../../global/koneksi.php';

$arr = array();
$i = 1;
$query = mysql_query("SELECT  sum(`quantity`) as total,product FROM `statistic` group by `product`
");
while ($row = mysql_fetch_assoc($query)) {
	$arr[] =$row;
}


echo json_encode($arr);


?>