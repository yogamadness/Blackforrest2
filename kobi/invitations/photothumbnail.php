<!DOCTYPE html>
<html>
<head>
  <title>Basic fotorama</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">

  <!-- jQuery -->
  <script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>

  <!-- Fotorama -->
  <link href="../../css/fotorama.css" rel="stylesheet">
  <script src="../../js/fotorama.js"></script>

  <!-- Just don’t want to repeat this prefix in every img[src] -->
 
</head>

<body style="background: transparent;" >
<!-- Fotorama -->
<button id="CloseButton" class="CloseBtn">X</button>
<div class="fotorama" data-nav="thumbs" data-arrows="true"
     data-click="true"
     data-swipe="true"
	 data-trackpad="true"
	 
	 >

  <?php
					include "../../config/koneksi.php";
					$col = 3;
					$batas = 50;//banyak data yang di tampilkan
					$halaman = $_GET['halaman'];
					
					if(empty($halaman)){
						$posisi = 0;$halaman = 1;
					}
					else{
					$posisi = ($halaman-1) * $batas;}// posisi dan batas tidak di tampilkan
					$s = mysql_query("SELECT * FROM invitation WHERE id_product='$_GET[id]' ORDER BY id_product LIMIT $posisi,$batas");
					
					if($s === false){
						die(mysql_error());

					}
					$cnt = 3;
					while ($w = mysql_fetch_array($s)) {
						if ($cnt>=$col) {
							
							$cnt = 0;
						}$cnt++;
						echo "<img src='../../adminbfc/uploads/$w[img1]'>
						";
					}
					
					
					?>
  
    
</div>

<script type="text/javascript">
$(document).ready(function () {
	$('.fotorama').fotorama({

		nav : false
	});

$('#CloseButton').click(function(){
		frameWarp.hide();
	});

});



</script>

<style type="text/css">
.CloseBtn{
  margin-left: 80%;
  margin-top: 8%;
}
</style>

</body>
</html>