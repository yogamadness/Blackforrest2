<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="author" content="Black Forrest Creative Inc.">
<meta name="Description" content="Beautiful Photobooks">
<title>Black Forrest Creatives</title>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link rel="shortcut icon" type="image/x-icon"  href="image/iconbfc.ico" />
<link href="css/switchbahasa.css" rel="stylesheet" />

<link rel="stylesheet" href="css/subscribe.css">
<link rel="stylesheet" href="css/twitter.css">



<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" href="css/footercss.css" type="text/css"/>

<!--3css dibawah adalah main css-->
<link rel="stylesheet" href="css/style.css" type="text/css"/>
<link rel="stylesheet" href="css/headergeneral.css" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/underlinenav.css" />

<script src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>

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

<body>

<?php include('header.php');?>

<?php include('headerbawahnewsroom.php');?>
<?php include include 'config/koneksi.php'; ?>
<?php $id = $_GET['pageid'];?>

<div id="mainWrapper" class="mainWrapper" align="center">

  <?php $query = mysql_query("SELECT * FROM newsroom where id_news = '$id'");

  if($query === FALSE){
    die(mysql_error());
  }

  while ($row =  mysql_fetch_array($query)) { ?>
  <br>
         <div class="container">
              <div class="row">
                  <div class="col-md-8" id="holdernews">
                   <div class="row">
                        <div id="header">
                        
                          <h3 id="title"><?php echo $row['title']; ?></h3>
                      
                      
                        </div>
                         <br><div class="pembagi bawah"></div><br><br>
                         <img id="bannerimage" src="image/<?php echo $row['banner_image'];?>"><br><br><br>
                         <div id="content">
                            <h4 id="titlebawah"><?php echo $row['title'];?></h4><br>
                            <?php echo $row['content'];?>
                            <br><br>
                            <p id="date"><i>Posted on : <?php echo $row['news_date'];?></i></p>
                         </div>
                      <br><br><br>
                      <a href="newsroom.php" id="back">Back to newsroom</a>
                   </div>
                  </div>  
              </div>
         </div> 
 <?php  }

  ?>    

   


<?php include"footer.php" ?>
</div>
<script src="js/modernizr.custom.js"></script>
<style type="text/css">

#content{
  font-size: 25px;
  font
}

#holdernews{
  
}
#holdernews{
  float:  center;

}

#bannerimage{
  float: center

}

#title{
  float :center;
}

#mainWrapper{
 
}

#content{
  font-size: 20px;
   line-height: 95%;
   text-align: justify;
}

#back{
  float: left;
}

#date{
  font-size: 12px;
}
#titlebawah{
   font-weight: bold;
}

</style>
</body>
