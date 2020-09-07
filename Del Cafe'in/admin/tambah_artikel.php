<?php 
include 'config.php';

$judul = $_POST['judul'];
$isi = $_POST['isi'];
mysqli_query($koneksi, "INSERT INTO artikel VALUES('', '$judul', '$isi')");
header("location: artikel.php");
?>
	