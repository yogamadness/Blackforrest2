<body id="wed">
	

<?php 

include "../../config/koneksi.php";

$col=3;
$batas=50;//banyak data yang di tampilkan : Arief Deswindo 
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;$halaman = 1;
	}
	else{
	$posisi = ($halaman-1) * $batas;}
	$s=mysql_query("SELECT * FROM invitation where id_category = 22 ORDER BY id_product DESC LIMIT $posisi,$batas");
	if($s === FALSE){
		die(mysql_error());

	}
					
	echo"<div class=ukuTable>";
	echo "<table><tr>";
	$cnt = 0;
	$addition = 0;
	while ($w = mysql_fetch_array($s)) {
		if ($cnt>=$col) {
		echo "</tr>";
	$cnt = 0;
		}$cnt++;
		$addition++;
	
	echo "<td align=center><br>	
	<a id='b$addition' href=photothumbnail.php?id=$w[id_product] data-fancybox-group='gallery'>
	<img class='gambar' src='../../adminbfc/uploads/$w[img_album]'  width=170px height=170px border=0><br>
	<h5> <b>$w[product_name]</b> </h5> </a>";
	}
	echo "</tr></table>";
	echo "</div>";
	
	
?>
