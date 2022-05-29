	<?php
		$query75  = $db->prepare("SELECT judul_halaman, isi_halaman FROM halaman_statis WHERE id_halaman = ? AND aktif = ?");
		$query75->bind_param("is", $_GET['id'], $aktif75);
		$aktif75  = "Y";
		$query75->execute();
		$result75 = $query75->get_result();
		$row75    = $result75->fetch_assoc();
		$judul75  = explode( " ", $row75['judul_halaman'] );
	?>
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"> Beranda</a></li>
				<li class="active"><?php echo $row75['judul_halaman']; ?></li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title"><?php echo $judul75[0] ?><span> <?php echo $judul75[1] ?></span></h3>
			</div>
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="sidebar-left">
						<h4> Kategori Produk </h4>
						<ul class="faq">
						<?php
							$query56 = $db->query("SELECT id_kategori,nama_kategori FROM kategori_produk ORDER BY nama_kategori ASC");
							while ( $row56   = $query56->fetch_assoc() ){
						?>
							<li class="item1"><a href="#"><?php echo $row56['nama_kategori']; ?><span class="glyphicon glyphicon-menu-down"></span></a>
								<ul>
								<?php
									$query57 = $db->query("SELECT id_subkategori,nama_subkategori,subkategori_seo FROM subkategori_produk WHERE id_kategori='$row56[id_kategori]' ORDER BY nama_subkategori ASC");
									while ( $row57 = $query57->fetch_assoc() ){
										echo '<li class="subitem1"><a href="kategori-'.$row57['id_subkategori'].'-'.$row57['subkategori_seo'].'.html">'.$row57['nama_subkategori'].'</a></li>';
									}
								?>																		
								</ul>
							</li>
						<?php
							}
						?>
						</ul>
						<!-- script for tabs -->
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						<!-- script for tabs -->
					</div>		 
				</div>
				<?php 
					$query17 = $db->query("SELECT produk.id_produk,produk.nama_produk,produk.produk_seo,produk.gambar,produk.harga,produk.stok,produk.diskon FROM produk ORDER BY dibeli DESC LIMIT 3");
					while ( $row17 = $query17->fetch_assoc() ){
					$harga17        = number_format( $row17['harga'],0,",","." );
					$disc17         = ($row17['diskon']/100)*$row17['harga'];
					$hargadisc17    = number_format(( $row17['harga']-$disc17),0,",","." );
					
					$cek_diskon17   = $row17['diskon'];
					$harga_tetap17  = 'Rp. '.$hargadisc17.'';
					$harga_diskon17 = 'Rp. <del>'.$harga17.'</del>  '.$hargadisc17.'';
					if ( $cek_diskon17 == 0 ){
						$harga_barang17 = $harga_tetap17;
					} else {
						$harga_barang17 = $harga_diskon17;
					}
					
					$stok17     = $row17['stok'];
					$tombolbeli17 = '<a class="item_add" href="aksi.php?module=keranjang&act=tambah&id='.$row17['id_produk'].'"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>';
					$tombolhabis17 = '<a class="item_add" href="#"><span class="glyphicon glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a>';
					if ( $stok17 == 0 ){
						$tombol17 = $tombolhabis17;
					} else {
						$tombol17 = $tombolbeli17;
					}
				?>
				<div class="gallery-grid">
					<h6>PRODUK TERLARIS</h6>
					<a href="produk-<?php echo $row17['id_produk']; ?>-<?php echo $row17['produk_seo']; ?>.html"><img src="gambar/thumb_produk1/<?php echo $row17['gambar']; ?>" class="img-responsive" alt=""/></a>
					<div class="gallery-text simpleCart_shelfItem">
						<h5><a class="name" href="produk-<?php echo $row17['id_produk']; ?>-<?php echo $row17['produk_seo']; ?>.html"><?php echo $row17['nama_produk']; ?></a></h5>
						<p><span class="item_price"><?php echo $harga_barang17; ?></span></p>
						<ul>
							<li><a href="produk-<?php echo $row17['id_produk']; ?>-<?php echo $row17['produk_seo']; ?>.html"><span class="glyphicon glyphicon-globe" aria-hidden="true"></span></a></li>
							<li><?php echo $tombol17; ?></li>
							<li><a href="#"><span class="glyphicon glyphicon glyphicon-heart-empty" aria-hidden="true"></span></a></li>
						</ul>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class="col-md-9 product-model-sec-custom">
				<div class="rsidebar-top">
					<p><?php echo $row75['isi_halaman']; ?></p>		
				</div>
			</div>
		</div>
	</div>
	<!--//products-->