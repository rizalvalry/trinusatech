<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    error_reporting(0);
	session_start();
	require "config/koneksi.php";
	$query00     = $db->query("SELECT nama_toko,email_pengelola,nomor_hp,meta_deskripsi,static_content, alamat, nomor_hp, email_protokol, alamat_web FROM profil");
	$row00       = $query00->fetch_assoc();
	$nama_toko00 = explode(" ", $row00['nama_toko']);
	$tahun       = date("Y");
?>
<!DOCTYPE html>
<html>
<head>
<title><?php include "judul.php"; ?></title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php include "meta_keyword.php" ?>" />
<meta property="og:description" content="<?php include "meta_deskripsi.php"; ?>" />
<meta property="og:title" content="<?php include "meta_deskripsi.php"; ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--//for-mobile-apps -->
<!--Custom Theme files -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--//Custom Theme files -->
<!--js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<!--//js-->
<!--cart-->
<script src="js/simpleCart.min.js"></script>
<!--cart-->
<!--web-fonts-->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'><link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Pompiere' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fascinate' rel='stylesheet' type='text/css'>
<!--web-fonts-->
<!--animation-effect-->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
	<script>
	 new WOW().init();
	</script>
<!--//animation-effect-->
<!--start-smooth-scrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smooth-scrolling-->
</head>
<body>
	<!--header-->
	<div class="header">
		<div class="top-header navbar navbar-default"><!--header-one-->
			<div class="container">
				<div class="nav navbar-nav wow fadeInLeft animated" data-wow-delay=".5s">
					<?php
						if ( $_SESSION['pbemail'] != " " && $_SESSION['pblevel'] == "kustomer" ){
							echo '<p>Selamat Datang Di '.$row00['nama_toko'].' <a href="akun-saya.html"> '.$_SESSION['pbnama'].' </a></p>';
						} else {
							echo '<p>Selamat Datang Di '.$row00['nama_toko'].' <a href="memberdaftar.html">Daftar </a>Atau<a href="loginmember.html"> Masuk </a></p>';
						}
					?>
				</div>
				<div class="nav navbar-nav navbar-right social-icons wow fadeInRight animated" data-wow-delay=".5s">
					<ul>
						<?php
							if ( $_SESSION['pbemail'] != " " && $_SESSION['pblevel'] == "kustomer" ){
								echo '<li><a href="akun-saya.html" data-toggle="tooltip"  title="Akun Saya"><i class="glyphicon glyphicon-user"></i></a></li>';
								echo '<li><a href="riwayat-pesanan.html" data-toggle="tooltip"  title="Riwayat Pesanan"><i class="glyphicon glyphicon-time"></i></a></li>';
								echo '<li><a href="keluar.php" data-toggle="tooltip"  title="Keluar"><i class="glyphicon glyphicon-off"></i></a></li>';
							} else {
								echo '<li><a href="login-member.html" data-toggle="tooltip"  title="Masuk"><i class="glyphicon glyphicon-lock"></i></a></li>';
							}
						?>	
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="header-two navbar navbar-default"><!--header-two-->
			<div class="container">
				<div class="nav navbar-nav header-two-left">
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i><?php echo $row00['nomor_hp']; ?></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:<?php echo $row00['email_pengelola']; ?>"><?php echo $row00['email_pengelola']; ?></a></li>			
					</ul>
				</div>
				<div class="nav navbar-nav logo wow zoomIn animated" data-wow-delay=".7s">
					<h1><a href="index.html"><?php echo $nama_toko00['0']; ?> <b><?php echo $nama_toko00['1']; ?></b><span class="tag"> <?php echo $row00['meta_deskripsi']; ?> </span> </a></h1>
				</div>
				<div class="nav navbar-nav navbar-right header-two-right">
					<div class="header-right my-account">
						<a href="hubungi-kami.html"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Hubungi Kami</a>						
					</div>
					<div class="header-right cart">
						<a href="keranjang-belanja.html"><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>
						<h4><a href="keranjang-belanja.html">
								<span> Rp. <?php include "item.php";  ?> </span> (<span><?php echo $jumlah21; ?></span>)
						</a></h4>
						<div class="cart-box">
							<p><a href="aksi.php?module=keranjang&act=kosongkan" class="simpleCart_empty">Kosongkan</a></p>
							<div class="clearfix"> </div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="top-nav navbar navbar-default"><!--header-three-->
			<div class="container">
				<nav class="navbar" role="navigation">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!--navbar-header-->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav top-nav-info">
							<li><a href="index.php" class="active">Beranda</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Produk<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">

										<?php
											$query1 = $db->prepare("SELECT id_kategori,nama_kategori FROM kategori_produk ORDER BY nama_kategori ASC");
											$query1->execute();
											$result1= $query1->get_result();
											while ( $row1 = $result1->fetch_assoc() ){
												echo '<div class="col-sm-4 menu-grids menulist1">';
												echo '<h4>'.$row1['nama_kategori'].'</h4>';
												$query2 = $db->prepare("SELECT id_subkategori,nama_subkategori,subkategori_seo FROM subkategori_produk WHERE aktif=? AND id_kategori=? ORDER BY nama_subkategori ASC");
												$query2->bind_param("si", $aktif2,$id_kategori2);
												$id_kategori2 = $row1['id_kategori'];
												$aktif2       = "Y";
												$query2->execute();
												$result2      = $query2->get_result();
												while ( $row2         = $result2->fetch_assoc() ){
													echo '<ul class="multi-column-dropdown ">';
													echo '<li>test<a class="list" href="kategori-'.$row2['id_subkategori'].'-'.$row2['subkategori_seo'].'.html">'.$row2['nama_subkategori'].'</a></li>';
													echo '</ul>';
												}
												echo '</div>';
											}
										?>
										
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Artikel<b class="caret"></b></a>
								<ul class="dropdown-menu multi-column multi-column1">
									<div class="row">

										<?php
											$query3 = $db->prepare("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel WHERE aktif=? ORDER BY nama_kategori ASC");
											$query3->bind_param("s", $aktif3);
											$aktif3 = "Y";
											$query3->execute();
											$result3= $query3->get_result();
											while ( $row3 = $result3->fetch_assoc() ){
												echo '<div class="col-sm-4 menu-grids menulist1">';
												echo '<ul class="multi-column-dropdown ">';
												echo '<li><a class="list" href="label-'.$row3['id_kategori'].'-'.$row3['kategori_seo'].'.html">'.$row3['nama_kategori'].'</a></li>';
												echo '</ul>';
												echo '</div>';
											}
										?>
										
										<div class="clearfix"> </div>
									</div>
								</ul>
							</li>
							<?php
								$query4  = $db->prepare("SELECT nama_menu,link FROM menuutama WHERE aktif=? AND lokasi=? ORDER BY urutan ASC");
								$query4->bind_param("ss", $aktif4,$lokasi4);
								$lokasi4 = "Public";
								$aktif4  = "Y";
								$query4->execute();
								$result4 = $query4->get_result();
								while ( $row4 = $result4->fetch_assoc() ){
									echo '<li><a href="'.$row4['link'].'">'.$row4['nama_menu'].'</a></li>';
								}
							?>
							
						</ul> 
						<div class="clearfix"> </div>
						<!--//navbar-collapse-->
						<header class="cd-main-header">
							<ul class="cd-header-buttons">
								<li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
							</ul> <!-- cd-header-buttons -->
						</header>
					</div>
					<!--//navbar-header-->
				</nav>
				<div id="cd-search" class="cd-search">
					<form method="POST" action="hasil-pencarian.html">
						<input type="search" name="kata" placeholder="Search...">
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--//header-->
	<?php include "tengah.php"; ?>
	
	<!--footer-->
	<div class="footer">
		<div class="container">
			<div class="footer-info">
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".5s">
					<h4 class="footer-logo"><a href="index.php"><?php echo $nama_toko00['0']; ?> <b><?php echo $nama_toko00['1']; ?></b> <span class="tag"><?php echo $row00['meta_deskripsi']; ?> </span> </a></h4>
					<p><?php echo $row00['alamat_web']; ?> © <?php echo $tahun; ?> . All rights reserved | Support by <a href="http://pijaronline.com" target="_blank">PijarOnline.com</a></p>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".7s">
					<h3>Popular</h3>
					<ul>
						<li><a href="semua-testimoni.html">Testimonial</a></li>
						<li><a href="profil-kami.html">Tentang Kami</a></li>
						<li><a href="hubungi-kami.html">Hubungi Kami</a></li>
						<li><a href="daftar-seller.html">Daftar Seller </a></li>
					</ul>
				</div>
				<div class="col-md-4 footer-grids wow fadeInUp animated" data-wow-delay=".9s">
					<h3>Sosial Media</h3>
					<ul>
						<?php
							$query123 = $db->query("SELECT nama_sosmed, link_sosmed FROM sosmed WHERE aktif = 'Y' ORDER BY nama_sosmed ASC");
							while( $row123 = $query123->fetch_assoc() ){
						?>
						<li><a href="<?php echo $row123['link_sosmed']; ?>" target="blank"><?php echo $row123['nama_sosmed']; ?></a></li>
						<?php
							}
						?>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--//footer-->		
	<!-- the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
			<script type="text/javascript" id="sourcecode">
				$(function()
				{
					$('.scroll-pane').jScrollPane();
				});
			</script>
	<!-- //the jScrollPane script -->
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<!-- the mousewheel plugin -->
	<!--search jQuery-->
	<script src="js/main.js"></script>
	<!--//search jQuery-->
	<!--smooth-scrolling-of-move-up-->
	<script type="text/javascript">
		$(document).ready(function() {
		
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
	<!--//smooth-scrolling-of-move-up-->
	<!--Bootstrap core JavaScript
    ================================================== -->
    <!--Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>
</html>