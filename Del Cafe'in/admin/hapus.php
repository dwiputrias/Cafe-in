<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from makanan where id_produk='$id'");
header("location:barang.php");

?>