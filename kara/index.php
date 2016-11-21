<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Black Forrest Creative Inc.">
<meta name="Description" content="Beautiful Photobooks">
<title>Kara</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" type="image/x-icon"  href="../image/iconkara.ico" />

<link href="../css/switchbahasa.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/subscribe.css">
<link rel="stylesheet" href="../css/twitter.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="../css/footercss.css" type="text/css"/>
<link href="font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--4css dibawah adalah main css-->
<link rel="stylesheet" href="../css/style.css" type="text/css"/>
<link rel="stylesheet" href="../css/childbrand.css" type="text/css"/>
<link rel="stylesheet" href="../css/headergeneral.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="../css/underlinenav.css" />

<script src="../js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../js/switchbahasa.js"></script>



</head>

<body id="bukku">

<?php include('headerkara.php');?>
<?php include('headerbawahkara.php');?>

<div id="mainWrapper" class="mainWrapper" align="center">

	 <div class="container slidesh">
        
        <div class="row slidown">
            <div class="col-md-8 col-md-offset-2 slideshw">
                <div id="carousel-example" class="carousel slide slidown" data-ride="carousel" style="border:2px solid #e1e1e1;">
                   
                    <div class="carousel-inner slidown">
                        <div class="item slidown active">

                            <img src="../image/bannerkara1.jpg" alt="" />
                           
                        </div>
                        <div class="item slidown">
                        
                            <img src="../image/bannerkara2.jpg" alt="" />
                          
                        </div>
                        <div class="item slidown">
                            <img src="../image/bannerkara3.jpg" alt="" />
                           
                        </div>
                    </div>
                    <!--INDICATORS-->
                    
                    <!--PREVIUS-NEXT BUTTONS-->
                     <a class="left carousel-control" href="#carousel-example" data-slide="prev">
  						  <!--<span class="glyphicon glyphicon-chevron-left"></span>-->
 					 </a>
 					 <a class="right carousel-control" href="#carousel-example" data-slide="next">
    					<!--<span class="glyphicon glyphicon-chevron-right"></span>-->
  					 </a>
                </div>
            </div>
        </div>
    </div>


    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="js/jquery-2.1.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script>
        $('.carousel').carousel({
            interval: 5000 //TIME IN MILLI SECONDS
        })
    </script>
	<script type="text/javascript">
		$(document).ready(function(){
		$("#myCarousel").carousel({
         interval : 5000,
         pause: false
			});
		});
	</script>
	
             
	
        
        <div class="row gambar3"> 
        	<div class="col-sm-6 col-md-4"> 
            	<div class="thumbnail no-border"> 
                	<img src="../image/productkara1.jpg" alt="Generic placeholder thumbnail"> 
                </div> 
                <div class="caption"> 
                	<p> 
                    	<a href="photobook/photobook.php?page=all" class="btn exampleproductbutton" role="button"> View Our Collection 
                        </a> 
                        
                    </p> 
                 </div> 
             </div> 
             <div class="col-sm-6 col-md-4"> 
               	<div class="thumbnail no-border"> 
                   	<img src="../image/productkara2.jpg" alt="Generic placeholder thumbnail"> 
                </div> 
                <div class="caption"> 
                	<p> 
                    	<a href="photobook/photobook.php?page=all" class="btn exampleproductbutton" role="button"> View Our Collection 
                        </a> 
                        
                    </p>  
                </div>
			</div> 
            <div class="col-sm-6 col-md-4"> 
            	<div class="thumbnail no-border"> 
                	<img src="../image/productkara3.jpg" alt="Generic placeholder thumbnail"> 
                </div> 
                <div class="caption"> 
                	<p> 
                    	<a href="#" class="btn exampleproductbutton" role="button"> View Our Collection 
                        </a> 
                        
                    </p> 
                </div> 
            </div> 
            
		</div>
        
        
            
    


<?php include"footer.php" ?>
</div>
<script src="../js/modernizr.custom.js"></script>
 </body>
