<?php 
	if ( $_SESSION['pbemail'] != " " && $_SESSION['pblevel'] == "kustomer" ){
?> 
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Akun Saya</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--products-->
	<div class="products">	 
		<div class="container">
			<div class="col-md-3 rsidebar" style="margin-bottom : 8px;">
				<div class="rsidebar-top">
					<div class="sidebar-left">
						<h4> Menu </h4>
						<ul class="faq">
							<li><a href="akun-saya.html">Akun Saya</a></li>						
							<li><a href="riwayat-pesanan.html">Riwayat Pesanan</a></li>						
							<li><a href="kata-sandi.html">Ubah Kata Sandi</a></li>						
							<li><a href="keluar.php">Keluar</a></li>						
						</ul>
					</div>		 
				</div>
			</div>
			<div class="col-md-9 product-model-sec-custom1">
				<div class="rsidebar-top">
					<form method="POST" action="">					
						<h4> Ubah Kata Sandi </h4>
						<p><span class="pull-right"><button name="simpan" class="btn btn-info" data-toogle="tooltip" title="SIMPAN"><i class="glyphicon glyphicon-file"></i> SIMPAN</button></span> </p>
						<br />
						<hr />
						<p>
						<?php
							if ( isset($_POST['simpan']) ){
								$query32  = $db->query("SELECT password FROM kustomer WHERE id_kustomer='$_SESSION[pbid]'");
								$row32    = $query32->fetch_assoc();
								
								$kslama   = $_POST['kslama'];
								$ksbaru   = $_POST['ksbaru'];
								$kskonfir = $_POST['kskonfir'];
								$cost     = ['cost' => 10,];
								$hash     = password_hash( $kskonfir, PASSWORD_BCRYPT, $cost ); 
								
								if ( $kslama <> password_verify( $kslama,$row32['password'] ) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Kata Sandi Lama Yang Anda Masukan Salah';
									echo '</div>';
								} else if ( empty($kslama) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Kata Sandi Lama Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($ksbaru) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Kata Sandi Baru Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($kskonfir) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Konfirmasi Kata Sandi Baru Tidak Boleh Kosong';
									echo '</div>';
								} else if ( strlen($ksbaru) < 6 ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Kata Sandi Baru Minimal 6 Karakter';
									echo '</div>';
								} else if ( strlen($kskonfir) < 6 ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Konfirmasi Kata Sandi Baru Minimal 6 Karakter';
									echo '</div>';
								} else if ( $ksbaru <> $kskonfir ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>PERINGATAN!</strong> Kata Sandi Baru dan Konfirmasi Kata Sandi Tidak Sama';
									echo '</div>';
								} else {
									$query33 = $db->prepare("UPDATE kustomer SET password = ? WHERE id_kustomer = ?");
									$query33->bind_param("si", $hash, $_SESSION['pbid']);
									$query33->execute();
									echo '<div class="alert alert-success" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>SUKSES!</strong> Kata Sandi Berhasil Diubah';
									echo '</div>';
									echo "<meta http-equiv='refresh' content='1; url=kata-sandi.html'>";
								}
							}
						?>
							<div class="form-group">
								<label>Kata Sandi Lama</label>
								<input type="text" name="kslama" value="<?php echo isset( $kslama ) ? $kslama : ""; ?>" class="form-control" placeholder="Kata Sandi Lama"  maxlength="60" required />
							</div>
							<div class="form-group">
								<label>Kata Sandi Baru</label>
								<input type="password" name="ksbaru" value="<?php echo isset( $ksbaru ) ? $ksbaru : ""; ?>" class="form-control" placeholder="Kata Sandi Baru"  maxlength="60" required  />
							</div>
							<div class="form-group">
								<label>Konfirmasi Kata Sandi Baru</label>
								<input type="password" name="kskonfir" value="<?php echo isset( $kskonfir ) ? $kskonfir : ""; ?>" class="form-control" placeholder="Konfirmasi Kata Sandi Baru" maxlength="60" required  />
							</div>
						</p>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->
<?php
	} else {
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	}
?>