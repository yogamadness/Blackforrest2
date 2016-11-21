
<body id="kid">
<?php

include "../../config/koneksi.php";
$col = 3;
$batas = 30;//banyak data yang di tampilkan : Arief Deswindo 
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;$halaman = 1;
	}
	else{
	$posisi = ($halaman-1) * $batas;}// posisi dan batas tidak di tampilkan
	$s = mysql_query("SELECT * FROM produk WHERE id_kategori LIKE '31' LIMIT $posisi,$batas");
	echo"<div class=ukuTable>";
	echo "<table><tr>";
	$cnt = 0;
	while ($w = mysql_fetch_array($s)) {
		if ($cnt>=$col) {
		echo "</tr>";
	$cnt = 0;
		}$cnt++;
		$addition++;
	
	echo "<td align=center><br>	
	<a id='b$addition' href=photothumbnail.php?id=$w[nama_produk] data-fancybox-group='gallery'>
	<img class='gambar' src='../../foto_produk/$w[gambar]'  width=170px height=170px border=0><br>
	<h5> <b>$w[nama_produk]</b> </h5> </a>";
	}
	echo "</tr></table>";
	echo "</div>";

?> 