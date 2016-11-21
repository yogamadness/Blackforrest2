<?php
 include '../../global/koneksi.php';


$namecategory = $_POST['namaCategory'];
 
$lowchar = strtolower($namecategory);


 $query = mysql_query("SELECT * from category where name_category = '$namecategory' order by id_category");

 if($query === false){
 	die(mysql_error());
 }

 
if(mysql_fetch_row($query) != 0){
	echo '0';

}else{

	$insert = mysql_query("INSERT into category values(DEFAULT,'$namecategory','$lowchar')");
	echo '1';

}


?>