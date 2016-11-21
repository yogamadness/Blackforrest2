
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Black Forrest Creatives">
<meta name="Description" content="Beautiful Photobooks">
<title>Bukku Photobooks</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" type="image/x-icon"  href="../../image/iconbukku.ico" />
<title>Product</title>
<link href="../../css/switchbahasa.css" rel="stylesheet" />
<link rel="stylesheet" href="../../css/sidenavigation.css" />
<link rel="stylesheet" href="../../css/subscribe.css">
<link rel="stylesheet" href="../../css/twitter.css">
<link rel="stylesheet" type="text/css" href="../../css/main.css">
<link rel="stylesheet" type="text/css" href="../../css/responsive.css">
<link rel="stylesheet" type="text/css" href="../../css/new.css">
<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="../../css/footercss.css" type="text/css"/>

<link rel="stylesheet" href="../../css/style.css" type="text/css"/>
<link rel="stylesheet" href="../../css/childbrand.css" type="text/css"/>
<link rel="stylesheet" href="../../css/headergeneral.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../../css/underlinenav.css" />

<link rel="stylesheet" href="../../css/framewarp.css" />
	 
<style>

.container {
	width: 960px;
	background: #fff;
}	
	
 #bannerproduct {
	width:1240px;
	background-size: contain;
	margin-top: 15px;
	margin-left: auto;
	margin-right: auto;
	}
	.left-sidebar {
		width: 180px;
		}
		
	td {
		width: 220px;
		height: 234px;
		vertical-align: bottom;
		}
	a#photobooksnav {
		border-bottom: 3px solid;
		}

</style>
	
	<script type="text/javascript" src="../../js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="../../bootstrap/js/bootstrap.js"></script>
	
<!--Start of Zopim Live Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute('charset','utf-8');
$.src='//v2.zopim.com/?2fXzEFBQDMvc7VvQqnEemadmmbVsY43C';z.t=+new Date;$.
type='text/javascript';e.parentNode.insertBefore($,e)})(document,'script');
</script>
<!--End of Zopim Live Chat Script-->
	
</head>
<body >

	<?php include('headeratas.php');?>
	<?php include('headerbawah.php');?>
	<section id="bannerproduct" style="">
        <span><img src="../../image/bukku-banner1.jpg" alt="Banner - Take This Journey With Me"></span><br>
        <div id="about" class="kata" >
        <p style="font-size:26px; font-weight:bold; font-family: Times New Roman, serif; letter-spacing: 10px">BUKKU PHOTOBOOKS GALLERY</p><br> 
	    </div>
        <br>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<?php include "nav_category.php"; ?>
					</div>
				</div>

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
					<?php include "photobookCOMPLATE.php";?>
					
					</div>
				</div>
			</div>

		</div>
<?php include"footer.php" ?>
	</section>
	
<style type="text/css">
.container{
	margin-bottom: 0%;
}

</style>

</body>
		<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script src="../../js/framewarp.js"></script>
        <script src="../../js/scriptchosepop.js"></script>
        <script type="text/javascript">

        $(document).ready(function(){



 			$('#submit').click(function(){

 			var location = document.URL;
 			
 			
 				//console.log('lgi di index');

 				var email = $('#email').val();
 				var rootFolder = "Blackforrest2";
 				var root = document.location.hostname + rootFolder;
 				//console.log(root);
 				

 					
 					$.post("../../subscribe/addSubscription.php",{email : email},function(message){
 					
 					});

 			});

		});


        </script>
</html>