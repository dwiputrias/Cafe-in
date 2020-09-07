<?php
require_once('koneksi.php');
session_start();
if (isset($_GET['out'])) {
    session_start();
    session_destroy();
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Del Cafe'in</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> 	
        <link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stylemenuindex.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stylelogin.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/style2.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/styletitle.css" rel="stylesheet" type="text/css" media="all">
         <link href="css/icons.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/pagination.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/slider.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
          <link href="css/hvr-shutter-in-vertical.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/etalage.css" rel="stylesheet" type="text/css" media="all">
        <script src="js/jquery.cslider.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/megamenu.js"></script>
        <script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
        <script>$(document).ready(function () {
                $(".megamenu").megamenu();
            });</script>
        <link rel="stylesheet" href="css/etalage.css">
        <script src="js/jquery.etalage.min.js"></script>
        <script>
            jQuery(document).ready(function ($) {

                $('#etalage').etalage({
                    thumb_image_width: 300,
                    thumb_image_height: 400,
                    source_image_width: 900,
                    source_image_height: 1200,
                    show_hint: true,
                    click_callback: function (image_anchor, instance_id) {
                        alert('Callback example:\nYou clicked on an image with the anchor: "' + image_anchor + '"\n(in Etalage instance: "' + instance_id + '")');
                    }
                });

            });
        </script>
        <script type="text/javascript">
            $(function() {
            
                $('#da-slider').cslider({
                    autoplay    : true,
                    bgincrement : 450
                });
            
            });
        </script>   
    </head>
    <body>

        <div class="header_bottom men_border">
            <div class="container">
                <div class="col-xs-8 header-bottom-left">
                    <div class="col-xs-2 logo">
                        <h1><a href="index.php"><img src="images/cafe2.png" alt="logo" style="width: 145px; margin-left: -20px; margin-top: -5px;"></a></h1>
                    </div>
                    <div class="col-xs-6 menu">
                        <style>
                            .skyblue li a.color1:hover{
    background:#A52A2A;
    color: #ffffff;
}
                        </style>
                        <ul class="megamenu skyblue">
                            <li class="grid"><a class="color1" href="index.php" style="font-size: 16px;">Beranda</a></li>
                            <li class="grid"><a class="color1" href="produk.php" style="font-size: 16px;">Menu Makanan</a></li>
                            <li><a class="color1" href="keranjang.php" style="font-size: 16px;">Pesanan</a></li>
                            <li><a class="color1" href="about.php" style="font-size: 16px;">Tentang Kami</a></li>
                        </ul> 
                    </div>
                </div>
                <div class="col-xs-4 header-bottom-right">   
                    <div class="search" style="margin-left: -80px;">	  
                        <form method="GET" action="cari_produk.php">
                            <input type="text" name="cari" class="textbox" placeholder="Cari Menu Makanan" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'Cari Menu Makanan';
                                    }">
                            <input type="submit" value="Subscribe" id="submit" name="submit">
                            <div id="response"> </div>
                        </form>
                    </div>
                    <div class="col-sm-7">
                        <ul class="megamenu skyblue">
                            <?php
                            if (!isset($_SESSION['masuk'])) {
                                echo '<li class="grid"><a class="color1" href="register.php" style="font-size: 16px;">Daftar</a></li>
			              <li class="grid"><a class="color1" href="login.php" style="font-size: 16px;">Masuk</a></li>
			                					';
                            } else {
                                echo '
                                        <li class="grid">
                                                <a class="dropdown-toggle" data-toggle="dropdown" style="font-size: 16px;">' . $_SESSION['username'] .'<b class="caret"></b>
                                                    <ul class="dropdown-menu">
                                     <li class="grid"><a class="color1" href="pesanan.php" style="font-size: 16px;">Pesanan</a></li>

                                      <li class="grid"><a class="color1" href="index.php?out" style="font-size: 16px;">Keluar</a></li>';

                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>


<style>
.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {
  color: #ffffff;
  background: brown !important; 
}

.dropdown-menu .active > a,
.dropdown-menu .active > a:hover {
  color: #ffffff;
  background: #89c236 !important;   
}
</style>