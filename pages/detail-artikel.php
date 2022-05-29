	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Detail Artikel</li>
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
			<div class="col-md-9 product-model-sec-custom">
			<?php
				include "config/tgl_indo.php";
				$db->query("UPDATE artikel SET dibaca = dibaca + 1 WHERE id_artikel = '$_GET[id]'");
				$query89     = $db->prepare("SELECT kategori_artikel.nama_kategori, artikel.judul_artikel, artikel.isi_artikel, artikel.tanggal, artikel.jam, artikel.dibaca, artikel.gambar, artikel.judul_seo, user.nama_lengkap FROM artikel INNER JOIN kategori_artikel ON artikel.id_kategori=kategori_artikel.id_kategori LEFT JOIN user ON artikel.id_user=user.id_user WHERE artikel.id_artikel = ?");
				$query89->bind_param("i", $id_artikel);
				$id_artikel  = $_GET['id'];
				$query89->execute();
				$result89    = $query89->get_result();
				$row89       = $result89->fetch_assoc();
				$tanggal     = tgl_indo( $row89['tanggal'] );
			?>
				<div class="rsidebar-top">	
					<div class="row">
						<center>
							<h2> <?php echo $row89['judul_artikel']; ?>  </h2>
							<p style="font-size : 10px; margin-top : 6px;"><?php echo 'Kategori : '.$row89['nama_kategori'].' | Tanggal : '.$tanggal.' | Jam : '.$row89['jam'].' WIB | Diposting : '.$row89['nama_lengkap'].' | Dibaca : '.$row89['dibaca'].' kali '; ?></p><br />
							<img src="gambar/artikel/<?php echo $row89['gambar']; ?>" class="img-responsive" height="80%" width="80%" /><br/>
						</center>
						<p><?php echo $row89['isi_artikel']; ?></p>
					</div>
					<br />
					<?php
						$batas                   = 10;
						if ( empty($_GET['halkomentar']) ){
							$posisi              = 0;
							$_GET['halkomentar'] = 1;
						} else if ( $_GET['halkomentar'] > 0 ){
							$posisi              = ( $_GET['halkomentar'] - 1 ) * $batas;
						}
						$query11  = $db->prepare("SELECT nama_lengkap, email, komentar, tanggal, jam FROM komentar WHERE id_artikel = ? AND aktif = ? ORDER BY id_komentar DESC limit $posisi,$batas");
						$query11->bind_param("is", $id_artikel, $aktif11);
						$aktif11  = "Y";
						$query11->execute();
						$result11 = $query11->get_result();
						$row11    = $result11->num_rows;
					?>
					<h4><?php echo $row11 ?> Komentar</h4><br/>
					<?php
						while ( $row111 = $result11->fetch_assoc() ){
					?>
					<div class="row">
						<div class="col-md-1">
						<img src="images/poto.jpg" />
						</div>
						<div class="col-md-11">
							<p><?php echo $row111['komentar']; ?></p>
							<p><?php echo $row111['nama_lengkap'].' | '.$row111['tanggal'].' - '.$row111['jam'].' WIB' ?></p>
						</div>
					</div><hr />
					<?php
						}
					?>
					<div class="row">
						<center>
							<ul class="pagination pagination-lg">
							<?php
								$query27      = $db->prepare("SELECT id_komentar FROM komentar WHERE id_artikel = ? AND aktif = ?");
								$query27->bind_param("is", $id_artikel, $aktif11);
								$query27->execute();
								$result27     = $query27->get_result();
								$row27        = $result27->num_rows;
								$jumlah_hal27 = ceil ($row27/$batas);
							?>
								<li class="<?php if ( $_GET['halkomentar'] <= 1 ) echo "disabled"; ?>"><a href="halkomentar-<?php echo $_GET['id']; ?>-<?php echo $_GET['halkomentar'] - 1; ?>.html"><i class="fa fa-angle-left">«</i></a></li>
								<?php
									for ( $i = 1; $i <= $jumlah_hal27; $i++ ){
								?>
									<li class="<?php if ( $_GET['halkomentar'] == $i ) echo "active"; ?>"><a href="<?php echo "halkomentar-$_GET[id]-$i.html"; ?>"><?php echo $i; ?></a></li>
								<?php
									}
								?>
								<li class="<?php if ( $_GET['halkomentar'] >= $jumlah_hal27 ) echo "disabled"; ?>"><a href="halkomentar-<?php echo $_GET['id']; ?>-<?php echo $_GET['halkomentar'] + 1; ?>.html"><i class="fa fa-angle-right">»</i></a></li>
							</ul>
						</center>
					</div>
					<div class="row">
						<h4>Tambah Komentar</h4>
						<form class="form-horizontal" method="POST" action="">
						<?php 
							if ( isset($_POST['komen']) ){
								date_default_timezone_set('Asia/Jakarta');
								$nama     = $_POST['nama'];
								$email    = $_POST['email'];
								$komentar = $_POST['komentar'];
								$kode     = $_POST['kode'];
								$aktif    = "Y";
								$tanggal  = date("Y-m-d");
								$jam      = date("H:i:s");
								
								if ( empty($nama) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> Nama Lengkap Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($email) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> E-Mail Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($komentar) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> Komentar Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($kode) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> Kode Tidak Boleh Kosong';
									echo '</div>';
								} else if ( !preg_match("/^[a-zA-Z .,]*$/",$nama) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> Nama Tidak Boleh mengandung angka dan karakter';
									echo '</div>';
								} else if ( $kode <> $_SESSION['key'] ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> Hasil hitung yang Anda masukan salah';
									echo '</div>';
								} else {
									$query100 = $db->prepare("INSERT INTO komentar(id_artikel, nama_lengkap, email, komentar, tanggal, jam, aktif) VALUES (?,?,?,?,?,?,?)");
									$query100->bind_param("issssss", $id_artikel, $nama, $email, $komentar, $tanggal, $jam, $aktif);
									$query100->execute();
									echo '<div class="alert alert-success" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>SUKSES!</strong> Komentar Berhasil Ditambahkan';
									echo '</div>';
									echo "<meta http-equiv='refresh' content='1; url=artikel-$_GET[id]-$row89[judul_seo].html'>";
								}
							}
							
						?>
							<div class="form-group">
								<label class="control-label col-md-2">Nama Lengkap</label>
								<div class="col-md-4">
									<input type="text" class="form-control" name="nama" value="<?php echo isset($nama) ? $nama : ""; ?>" placeholder="Nama Lengkap" required />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">E-Mail</label>
								<div class="col-md-5">
									<input type="email" class="form-control" name="email" value="<?php echo isset($email) ? $email : ""; ?>" placeholder="E-Mail" required />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Komentar</label>
								<div class="col-md-8">
									<textarea class="form-control" name="komentar" rows="5" placeholder="Komentar" required><?php echo isset($komentar) ? $komentar : ""; ?></textarea>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2"></label>
								<div class="col-md-8">
									<img src="captcha/captcha.php" />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2">Hasil Hitung</label>
								<div class="col-md-2">
									<input type="text"  name="kode"class="form-control" placeholder="Hasil" required />
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-md-2"></label>
								<div class="col-md-8">
									<input type="submit" name="komen" value="Komentar" class="btn btn-primary btn-block" />
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->