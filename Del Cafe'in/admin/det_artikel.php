<?php 
include 'header.php';
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Detail Artikel</h3>
<a class="btn" href="artikel.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>

<?php
$id_art=mysqli_real_escape_string($koneksi, $_GET['id']);


$art=mysqli_query($koneksi, "select * from artikel where id_artikel='$id_art'")or die(mysql_error());
while($a=mysqli_fetch_array($art)){
	?>					
	<table class="table">
		<tr>
			<td>Judul Artikel</td>
			<td><?php echo $a['judul'] ?></td>
		</tr>
		<tr>
			<td>Isi Artikel</td>
			<td><?php echo $a['deskripsi'] ?></td>
		</tr>
	</table>
	<?php 
}
?>
<?php include 'footer.php'; ?>