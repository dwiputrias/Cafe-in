<?php 
include 'header.php';
?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit Artikel</h3>
<a class="btn" href="artikel.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_art=mysqli_real_escape_string($koneksi, $_GET['id']);
$art=mysqli_query($koneksi, "select * from artikel where id_artikel='$id_art'")or die(mysql_error());
while($a=mysqli_fetch_array($art)){
?>					
	<form action="update_art.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $a['id_artikel'] ?>"></td>
			</tr>
			<tr>
				<td>Judul Artikel</td>
				<td><input type="text" class="form-control" name="judul" value="<?php echo $a['judul'] ?>"></td>
			</tr>
			<tr>
				<td>Isi Artikel</td>
				<td><textarea class="form-control" name="isi"><?php echo $a['deskripsi'] ?></textarea>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
<?php include 'footer.php'; ?>