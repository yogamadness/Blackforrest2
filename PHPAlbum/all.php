
<script src="jquery/jquery.classdis.js" type="text/javascript"></script>


<body id="all">
<script type="text/javascript" src="fb/jquery.js"></script>
		<link rel="stylesheet" href="fb/jquery.fancybox.css?

v=2.1.0" 
		type="text/css" media="screen" />
		<script type="text/javascript" 

src="fb/jquery.fancybox.pack.js?v=2.1.0"></script>
		

<?php 

include "./config/koneksi.php";

$col=3;
$batas=50;//banyak data yang di tampilkan : Arief Deswindo 
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;$halaman = 1;
	}
	else{
	$posisi = ($halaman-1) * $batas;}
	$s=mysql_query("SELECT nama_produk, produk.id_produk,gambar,
					COUNT(contentproduct.id_contentproduct) as jumlah
					FROM produk LEFT JOIN contentproduct ON produk.id_produk=contentproduct.id_produk
					GROUP BY id_produk DESC LIMIT $posisi,$batas");
					
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
	<a id='b$addition' href=photothumbnail.php?id=$w[nama_produk] data-fancybox-group='gallery'>
	<img class='gambar' src='./foto_produk/$w[gambar]'  width=170px height=170px border=0><br>
	<h5> <b>$w[nama_produk]</b> </h5> </a>";
	}
	echo "</tr></table>";
	echo "</div>";
	
	
?>
