<?php 
include 'header.php'; 
include 'config.php';
?>

<h3><span class="glyphicon glyphicon-list-alt"></span> Artikel</h3>
<a href="tambah_art.php" style="margin-bottom:20px" class="btn btn-info col-md-2"><span class="glyphicon glyphicon-plus"></span>Tambah Artikel</a>
<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi, "SELECT * from artikel");
$jum=mysqli_num_rows($jumlah_record);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>
<div class="col-md-12">
	<table class="col-md-2">
		<tr>
			<td>Jumlah Record</td>		
			<td><?php echo $jum; ?></td>
		</tr>
		<tr>
			<td>Jumlah Halaman</td>	
			<td><?php echo $halaman; ?></td>
		</tr>
	</table>
</div> <br> <br>
<form action="cari_artikel.php" method="GET">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari artikel di sini .." aria-describedby="basic-addon1" name="cari_artikel">	
	</div>
</form><br />
	<?php 
	if(isset($_GET['cari_artikel'])){
		echo '<div><h4> Hasil pencarian artikel dengan kata kunci "'. $_GET['cari_artikel'] .'" </h4></div>';
		$cari_artikel=mysqli_real_escape_string($koneksi, $_GET['cari_artikel']);
		$artikel=mysqli_query($koneksi, "select * from artikel where judul like '%$cari_artikel%'");
	}else{
		$artikel=mysqli_query($koneksi, "select * from artikel limit $start, $per_hal");
	}
	$no=1;
	if(mysqli_num_rows($artikel) == null){
		if(isset($_GET['cari_artikel'])){
			echo '<h5 align="center">Artikel dengan kata kunci "'. $_GET['cari_artikel'] .'" tidak ada.</h5>';
		}
	}else{
	?>
		
	<table class="table table-hover">
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-4">Judul Artikel</th>
			<th class="col-md-3">Opsi</th>
		</tr>
	
	<?php
	while($a=mysqli_fetch_array($artikel)){
		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $a['judul'] ?></td>
			<td>
				<a href="det_artikel.php?id=<?php echo $a['id_artikel']; ?>" class="btn btn-info">Detail</a>
				<a href="edit_artikel.php?id=<?php echo $a['id_artikel']; ?>" class="btn btn-warning">Edit</a>
				<a onclick="if(confirm('Apakah anda yakin ingin menghapus data ini ??')){ location.href='hapus_artikel.php?id=<?php echo $a['id_artikel']; ?>' }" class="btn btn-danger">Hapus</a>
			</td>
		</tr>		
		<?php 
	}
	?>
	
</table>
<ul class="pagination">			
			<?php 
			for($x=1;$x<=$halaman;$x++){
				?>
				<li><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
	}
			?>						
		</ul>



<?php 
include 'footer.php';

?>