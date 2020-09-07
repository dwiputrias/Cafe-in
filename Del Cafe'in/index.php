<?php
	include 'koneksi.php';
    include 'header.php';
?>


  <ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
<div class="slider-wrapper">

		<div id="da-slider" class="da-slider" style="	background: transparent url(img/cafee.jpg) repeat 0% 0%;
	border-top: 1px solid #eb103c;
	border-bottom: 1px solid #eb103c;
	">
	<p style="color: #ffffff; font-size: 45px; margin-top: 130px; margin-left: 260px; font-family: jokerman;" >SELAMAT DATANG DI DEL CAFE'IN</p>
</div>

<!--menu pada index-->
  <ul class="tp-hd-lft wow fadeInDown animated" data-wow-delay="0.5s">
			<div class="" ="content_top">
				<h3 class="future" style="font-family: cursive; font-size: 18px;">MENU MAKANAN BARU</h3><br>
				<div class="container">
					<div class="box_1">
					<div class="">
						<?php
	$makanan = mysqli_query($koneksi, "SELECT * FROM makanan ORDER BY id_produk LIMIT 6");
	while($p = mysqli_fetch_array($makanan)){
?>
<div class="grids_of_4">
<div class="col-md-4">
				<div class="col-md 7">
				<div class="content_box"><a href="detailproduk.php?id=<?=$p['id_produk']?>">
			   	  <div class="view view-fifth">
			   	   	<img src="<?php echo 'admin/gambar/'.$p['gambar']; ?>" width="200" height="200"/>
			   	   	  	<div class="mask1">
	                        <div class="info"> </div>
			            </div>
				   </div>
				   	  </a>
				    <h5 style="margin-left: -20px;"><a href="detailproduk.php?id=<?=$p['id_']?>"> <?= $p['nama']?></a></h5>
				     <div class="size_1">
				     	<span class="item_price">Rp. <?= number_format($p['harga'])?>,-</span>
		      		    <div class="clearfix"></div>
		      		  </div>
			     </div>
			</div><br>
				</div>
					</div>
				<?php }?>
				</div>
	</div>
</div>
</ul>
</div>

<div class="btn" style="padding-left: 1110px;">
<a href="produk.php" class="next">Lihat menu makanan lainnya>></a>
</div>

<?php
    include 'footer.php';
?>


<style type="text/css">
.next {
	-moz-box-shadow:inset -1px 2px 2px 0px #0f030f;
	-webkit-box-shadow:inset -1px 2px 2px 0px #0f030f;
	box-shadow:inset -1px 2px 2px 0px #0f030f;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ededed), color-stop(1, #dfdfdf) );
	background:-moz-linear-gradient( center top, #ededed 5%, #dfdfdf 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ededed', endColorstr='#dfdfdf');
	background-color:#ededed;
	-webkit-border-top-left-radius:20px;
	-moz-border-radius-topleft:20px;
	border-top-left-radius:20px;
	-webkit-border-top-right-radius:0px;
	-moz-border-radius-topright:0px;
	border-top-right-radius:0px;
	-webkit-border-bottom-right-radius:20px;
	-moz-border-radius-bottomright:20px;
	border-bottom-right-radius:20px;
	-webkit-border-bottom-left-radius:0px;
	-moz-border-radius-bottomleft:0px;
	border-bottom-left-radius:0px;
	text-indent:4px;
	border:2px solid #dcdcdc;
	display:inline-block;
	color:#777777;
	font-family:Comic Sans MS;
	font-size:16px;
	font-weight:bold;
	font-style:normal;
	height:58px;
	line-height:58px;
	width:200px;
	text-decoration:none;
	text-align:center;
	text-shadow:2px 0px 50px #ffffff;

.next:hover {
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #dfdfdf), color-stop(1, #ededed) );
	background:-moz-linear-gradient( center top, #dfdfdf 5%, #ededed 100% );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#dfdfdf', endColorstr='#ededed');
	background-color:#dfdfdf;
}.next:active {
	position:relative;
	top:1px;
}
</style>
