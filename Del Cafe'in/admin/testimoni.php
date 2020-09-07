<?php 
include 'header.php'; 
include 'config.php';
?>

<h3><span class="glyphicon glyphicon-comment"></span> Komentar </h3>
<br/>

<?php 
$per_hal=10;
$jumlah_record=mysqli_query($koneksi, "SELECT * from komentar");
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
</div>

<table class="table table-hover">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-2">Nama</th>
		<th class="col-md-3">Isi</th>
		<th class="col-md-2">Nama Menu </th>
		<th class="col-md-1">Tanggal</th>
		<th class="col-md-1">Status</th>		
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
	$testi=mysqli_query($koneksi, "SELECT * FROM komentar ORDER BY id_komentar DESC limit $start, $per_hal");
	$no=1;
	while($t=mysqli_fetch_assoc($testi)){

		?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php
				$id_user = $t['id_user'];
				$user = mysqli_query($koneksi, "SELECT * FROM users WHERE id_user = '$id_user'");
				$u = mysqli_fetch_assoc($user);
				echo $u['nama']; 
			?></td>
			<td><?php echo $t['isi'] ?></td>
			<td>
				<?php
					$id_produk = $t['id_produk'];
					$makanan = mysqli_query($koneksi, "SELECT * FROM makanan WHERE id_produk = '$id_produk'");
					$p = mysqli_fetch_assoc($makanan);
					echo $p['nama'];
				?>
			</td>
			<td><?php echo $t['tanggal'] ?></td>
			<td><?php echo $t['status'] ?></td>
			<td>
			<?php
				if($t['status'] == 'Confirmed'){
					echo 'Confirmed';
				}else if($t['status'] == 'Rejected'){
					echo 'Rejected';
				}else{
			?>
			<a href="confrim_testimoni.php?id=<?php echo $t['id_komentar']; ?>" class="btn btn-info">Confirm</a>
			<a href="reject_testimoni.php?id=<?php echo $t['id_komentar']; ?>" class="btn btn-danger">Reject</a>
			</td>
		</tr>		
		<?php 
	}
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
	?>						
</ul>

<?php 
include 'footer.php';

?>