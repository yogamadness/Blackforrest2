
<body id="pre">
<?php

include "../../config/koneksi.php";
$col = 3;
$batas = 15;//banyak data yang di tampilkan : Arief Deswindo 
$halaman = $_GET['halaman'];
if(empty($halaman)){
	$posisi = 0;$halaman = 1;
	}
	else{
	$posisi = ($halaman-1) * $batas;}// posisi dan batas tidak di tampilkan
	$s = mysql_query("SELECT * FROM invitation where id_category = 24 LIMIT $posisi,$batas");
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
	echo "</table>";

	//Paging 
	$query = mysql_query("SELECT * FROM invitation where id_category = 24 ");
	$row = mysql_num_rows($query);
	$total_pages = ceil($row / $batas);

	echo "<nav>";
	echo "<ul class='pagination pagingpos'>";
	

	for ($i=1; $i<=$total_pages; $i++) { 
            echo "<li class='p$i page'><a href='invitations.php?page=pre&halaman=".$i."'>".$i."</a></li> "; 
	}; 
	

	echo "</nav>";
	echo "</div>";
?>
</body>

<script>	
	$(document).ready(function(){
		var halaman = "<?php echo $halaman;?>";
		if(halaman){
			$('.p'+halaman).addClass('active');
		}else{

		}
	});
</script>	
