<script>
var url = window.location;
// Will only work if string in href matches with location
$('ul.nav a[href="'+ url +'"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$('ul.nav a').filter(function() {
    return this.href == url;
}).parent().addClass('active');
</script>
<body id="hol">
<script type="text/javascript" src="fb/jquery.js"></script>
		<link rel="stylesheet" href="fb/jquery.fancybox.css?

v=2.1.0" 
		type="text/css" media="screen" />
		<script type="text/javascript" 

src="fb/jquery.fancybox.pack.js?v=2.1.0"></script>
		<script type="text/javascript">$(document).ready

(function() {
				

				$('.fancybox').fancybox();
			});
</script>


<?php
include "./config/koneksi.php";
$col = 3;
$batas = 30;//banyak data yang di tampilkan : Arief Deswindo 
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;$halaman = 1;
	}
	else{
	$posisi = ($halaman-1) * $batas;}// posisi dan batas tidak di tampilkan
	$s = mysql_query("SELECT * FROM produk WHERE id_kategori LIKE '21' LIMIT $posisi,$batas");
	echo"<div class=ukuTable>";
	echo "<table><tr>";
	$cnt = 0;
	while ($w = mysql_fetch_array($s)) {
		if ($cnt>=$col) {
		echo "</tr><tr>";
	$cnt = 0;
		}$cnt++;
	echo "<td align=center><br>
	<a class='fancybox' href='photobook.php?id=$w[nama_produk]' data-fancybox-group='gallery' title='$w[deskripsi]'>
	<br><img class='gambarlain' src='foto_produk/$w[gambar]'  width=170px height=170px border=0></a><br>
	<h5>$w[nama_produk]</h5><br></td>";
	}
echo "</tr></table>";
echo "</div>";

?> 