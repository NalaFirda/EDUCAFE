<?php
$hos = "localhost";
$uname = "root"; 
$pswd= "";
$nama_db = "beli";

$konek = mysqli_connect($hos,$uname,$pswd,$nama_db) or 
           die ("Gagal terhubung ke server MySQL!");
?>

