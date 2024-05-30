<?php
	require_once "koneksi.php";
	$p=$_GET['p'];
	$nama=$_GET['nama'];
	$jumlah=$_GET['jumlah'];
	echo "$p - $nama - $jumlah";
	mysqli_query($konek, "INSERT INTO beli VALUES(null, '$nama', '$jumlah', '$p')");
	header("location:index.html");
?>