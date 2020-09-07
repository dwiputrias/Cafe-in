<?php
	include 'koneksi.php';
    include 'header.php';
?>

<?php
$per_hal = 9;
$jumlah_record = mysqli_query($koneksi, "SELECT * from makanan");
$jum = mysqli_num_rows($jumlah_record);
$halaman = ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
?>

<div id="page-title">
    <div id="page-title-inner">
        <div class="container">
            <h2><i class="ico-briefcase ico-white"></i>Makanan</h2>
        </div>
    </div>	
</div>

  <ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
<div class="container">
<div class="women_main">
	<div class="box_1">
		<!-- grids_of_4 -->
		<div class="grids_of_4">
		<?php
			if(isset($_GET['cari'])){
				echo '<div> <font size="3">Hasil pencarian makanan dengan kata kunci "'. $_GET['cari'] .'". </font></div>';
					$cari=mysqli_real_escape_string($koneksi, $_GET['cari']);
					$makanan=mysqli_query($koneksi, "select * from makanan where nama like '%$cari%' or harga like '%$cari%'");
					if(mysqli_num_rows($makanan) == null){
						echo '<br><div align="center"> <font size="4">Makanan yang anda cari tidak ada. </font></div>';
					}
			}else{
			$makanan = mysqli_query($koneksi, "SELECT * FROM makanan LIMIT $start, $per_hal");
			}
			while($p = mysqli_fetch_array($makanan)){
		?>
			<div class="col-md-4 md-col">
							<div class="col-md 7">
								<a href="detailproduk.php?id=<?= $p['id_produk']?>">
							<img src="<?php echo 'admin/gambar/'.$p['gambar']; ?>" width="200" height="230" />
								<div class="top-content">
									<center><h5 style="font-size: 20px; font-family: monospace;"><a href="detailproduk.php?id=<?= $p['id_produk']?>"><?= $p['nama']?></a></h5>	
									<div align="right"><p class="dollar"><span class="in-dollar">Rp. </span><span><?= $p['harga']?></span></div>
										<div class="clearfix"></div>
									</div>
									<br>
								</div><br>							
							</div>
		 
			<?php }?>
				</a>
			</div>
		</div>
	</div>
</div>
</ul>

<br><br>
<ul class="start" style="margin-left: 610px;">			
			<?php 
			for($x = 1;$x <= $halaman; $x++){
				?>
				<li class="arrow"><a href="?page=<?php echo $x ?>"><?php echo $x ?></a></li>
				<?php
			}
			?>			
	</ul>

<?php
    include 'footer.php';
?>