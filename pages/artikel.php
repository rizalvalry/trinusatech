	<?php
		$query55          = $db->prepare("SELECT kategori_artikel.nama_kategori FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori WHERE kategori_artikel.id_kategori = ?");
		$query55->bind_param("i", $id_artikel55);
		$id_artikel55 = $_GET['id'];
		$query55->execute();
		$result55         = $query55->get_result();
		$row55            = $result55->fetch_assoc();
		$jumlah55         = $result55->num_rows;
		
		if ( $jumlah55 > 0 ){
		
		
	?>
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Kategori : <?php echo $row55['nama_kategori']; ?></li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	 
		<div class="container">
			<div class="col-md-3 rsidebar">
				<div class="rsidebar-top">
					<div class="sidebar-left">
						<h4> Kategori Artikel </h4>
						<ul class="faq">
						<?php
							$query56 = $db->query("SELECT id_kategori,nama_kategori,kategori_seo FROM kategori_artikel ORDER BY nama_kategori ASC");
							while ( $row56   = $query56->fetch_assoc() ){
						?>
							<li class="item1"><a href="label-<?php echo $row56['id_kategori']; ?>-<?php echo $row56['kategori_seo']; ?>.html"><?php echo $row56['nama_kategori']; ?></a>
						<?php
							}
						?>
						</ul>
					</div>		 
				</div>
				<div class="rsidebar-top" style="margin-top : 2em;">
					<div class="sidebar-left">
						<h4> Download </h4>
						<ul class="faq">
						<?php
							$query1234         = $db->query("SELECT file, judul_file FROM file WHERE aktif = 'Y' ORDER BY id_file DESC");
							while ( $row1234   = $query1234->fetch_assoc() ){
								echo '<li><a href="file/'.$row1234['file'].'">'.$row1234['judul_file'].'</a></li>';
							}
						
						?>										
						</ul>
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
						</ul>
					</div>
				</div>
				<?php
					}
				?>
			</div>
			<div class="col-md-9 product-model-sec-custom2">
			<?php
				include "config/tgl_indo.php";
				$batas                   = 9;
				if ( empty($_GET['hallabel']) ){
					$posisi              = 0;
					$_GET['hallabel'] = 1;
				} else if ( $_GET['hallabel'] > 0 ){
					$posisi              = ( $_GET['hallabel'] - 1 ) * $batas;
				}
				$query5                  = $db->prepare("SELECT artikel.id_artikel, artikel.judul_artikel, artikel.judul_seo, artikel.isi_artikel, artikel.gambar, artikel.dibaca, artikel.tanggal, artikel.hari FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori WHERE kategori_artikel.id_kategori=? ORDER BY artikel.id_artikel DESC limit $posisi, $batas");
				$query5->bind_param("i", $id_artikel5);
				$id_artikel5             = $_GET['id'];
				$query5->execute();
				$result5                 = $query5->get_result();
				while ( $row5            = $result5->fetch_assoc() ){
					$tanggal             = tgl_indo($row5['tanggal']);
					$isi_artikel         = $row5['isi_artikel'];
					$isi                 = substr($isi_artikel,0,150); // ambil sebanyak 220 karakter
					$isi                 = substr($isi_artikel,0,strrpos($isi," ")); // potong per spasi kalimat

			?>
				<div class="product-grids3 simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<center><a href="artikel-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>.html"><img src="gambar/thumb_artikel/<?php echo $row5['gambar']; ?>" class="img-responsive" alt=""/></a><center>
						<div class="new-text" style="color : #fff;">
							<p><?php echo $isi.' ...'; ?></p>
						</div>
					</div>
					<div class="new-bottom">
						<center><p style="font-size : 10px;">Diposting: <?php echo $row5['hari'].' ,'.$tanggal; ?>, Dibaca: <?php echo $row5['dibaca']; ?> kali</p></center>
						<h5><a class="name" href="artikel-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>.html"><?php echo $row5['judul_artikel']; ?></a></h5><hr />
						<div class="ofr" style="margin-top : 4px;">
							<center><a href="artikel-<?php echo $row5['id_artikel']; ?>-<?php echo $row5['judul_seo']; ?>.html" class="btn btn-default btn-block">Selengkapnya</a></center>
						</div>
					</div>
				</div>
			<?php
				}
			?>
				<div class="clearfix"></div>
				<div class="grid_3 grid_5 wow fadeInDown animated" data-wow-delay=".5s">
				<center>
					<ul class="pagination pagination-lg">
					<?php
						$query27      = $db->query("SELECT id_artikel FROM artikel,kategori_artikel WHERE artikel.id_kategori=kategori_artikel.id_kategori AND kategori_artikel.id_kategori = '$_GET[id]'");
						$row27        = $query27->num_rows;
						$jumlah_hal27 = ceil ($row27/$batas);
					?>
						<li class="<?php if ( $_GET['hallabel'] <= 1 ) echo "disabled"; ?>"><a href="hallabel-<?php echo $_GET['id']; ?>-<?php echo $_GET['hallabel'] - 1; ?>.html"><i class="fa fa-angle-left">«</i></a></li>
						<?php
							for ( $i = 1; $i <= $jumlah_hal27; $i++ ){
						?>
							<li class="<?php if ( $_GET['hallabel'] == $i ) echo "active"; ?>"><a href="hallabel-<?php echo $_GET['id'].'-'. $i; ?>.html"><?php echo $i; ?></a></li>
						<?php
							}
						?>
						<li class="<?php if ( $_GET['hallabel'] >= $jumlah_hal27 ) echo "disabled"; ?>"><a href="hallabel-<?php echo $_GET['id']; ?>-<?php echo $_GET['hallabel'] + 1; ?>.html"><i class="fa fa-angle-right">»</i></a></li>
					</ul>
				</center>
				</div>
			</div>
		</div>
	</div>
	<!--//products-->
	<?php
		} else {
			$query45 = $db->query("SELECT nama_kategori FROM kategori_artikel WHERE id_kategori='$_GET[id]'");
			$row45   = $query45->fetch_assoc();
			echo '<div class="breadcrumbs">';
			echo '<div class="container">';
			echo '<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">';
			echo '<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>';
			echo '<li class="active">Belum Ada Artikel Untuk Kategori : '.$row45['nama_kategori'].'</li>';
			echo '</ol>';
			echo '</div>';
			echo '</div>';
		}
	?>
			
	
	