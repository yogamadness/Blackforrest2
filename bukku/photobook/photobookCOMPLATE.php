
<?php
if(isset($_GET['page'])){
switch ($_GET['page']){ 
case 'all' : if(!file_exists ("PHPAlbum/all.php")) 
die ("Page ALL belum disiapkan"); 
include "PHPAlbum/all.php";
break;
case 'hol' : if(!file_exists ("PHPAlbum/hol.php")) 
die ("Page HOLIDAY belum disiapkan"); 
include "PHPAlbum/hol.php"; 
break; 
case 'wed' : if(!file_exists ("PHPAlbum/wed.php")) 
die ("Page WEDDING belum disiapkan"); 
include "PHPAlbum/wed.php"; 
break; 
case 'sea' : if(!file_exists ("PHPAlbum/sea.php")) 
die ("Page SEASONAL belum disiapkan"); 
include "PHPAlbum/sea.php"; 
break; 
case 'pre' : if(!file_exists ("PHPAlbum/pre.php")) 
die ("Page PREGNANCY belum disiapkan"); 
include "PHPAlbum/pre.php"; 
break;
case 'bab' : if(!file_exists ("PHPAlbum/bab.php")) 
die ("File periksa BABY BUMP belum dibuat"); 
include "PHPAlbum/bab.php"; 
break;
case 'bir' : if(!file_exists ("PHPAlbum/bir.php")) 
die ("Page BIRTHDAY belum disiapkan"); 
include "PHPAlbum/bir.php"; 
break;
case 'fam' : if(!file_exists ("PHPAlbum/fam.php")) 
die ("Page FAMILLY belum disiapkan"); 
include "PHPAlbum/fam.php"; 
break;
case 'fri' : if(!file_exists ("PHPAlbum/fri.php")) 
die ("Page FRIENDS belum disiapkan"); 
include "PHPAlbum/fri.php"; 
break;
case 'cou' : if(!file_exists ("PHPAlbum/cou.php")) 
die ("Page COUPLE belum disiapkan"); 
include "PHPAlbum/cou.php"; 
break;
case 'gra' : if(!file_exists ("PHPAlbum/gra.php")) 
die ("Page GRADUATION belum disiapkan"); 
include "PHPAlbum/gra.php"; 
break;
case 'kid' : if(!file_exists ("PHPAlbum/kid.php")) 
die ("Page KIDS belum disiapkan"); 
include "PHPAlbum/kid.php"; 
break;
}}
?>



