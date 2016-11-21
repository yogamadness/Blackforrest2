<?php
include 'koneksi.php';
session_destroy();

unset($_SESSION['username']);
unset($_SESSION['level']);
unset($_SESSION['nama_lengkap']);
echo '<script type="text/javascript">window.location = "../../login.php"; </script>';
?>