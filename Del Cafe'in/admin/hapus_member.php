<?php 
include 'config.php';
$id=$_GET['id'];
mysqli_query($koneksi, "delete from users where id_users='$id'");
header("location:data_member.php");

 ?>