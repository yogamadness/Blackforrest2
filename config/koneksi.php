<?php
ini_set('display_errors',FALSE);
$server = "localhost";
$username = "root";
$password = "";
$database = "blackfor_creatives";

// Koneksi dan memilih database di server
mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
