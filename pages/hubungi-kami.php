	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Hubungi Kami</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<div class="address"><!--address-->
		<div class="container">
			<div class="address-row">
				<div class="col-md-6 address-left wow fadeInLeft animated" data-wow-delay=".5s">
					<div class="address-grid">
					<?php
						if ( isset( $_POST['hubungi'] ) ){
							
							date_default_timezone_set('Asia/Jakarta');
							$tanggal = date("Y-m-d");
							$nama    = $_POST['nama'];
							$email   = $_POST['email'];
							$subjek  = $_POST['subjek'];
							$pesan   = $_POST['pesan'];
							$kode    = $_POST['kode'];
							$dibuka  = "T";
							
							if ( empty($nama) ){
								echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
								echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Peringatan!</strong> Nama Lengkap Tidak Boleh Kosong';
								echo '</div>';
							} else if ( empty($email) ) {
								echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
								echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Peringatan!</strong> E-Mail Tidak Boleh Kosong';
								echo '</div>';
							} else if ( empty($subjek) ){
								echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
								echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Peringatan!</strong> Subjek Tidak Boleh Kosong';
								echo '</div>';
							} else if ( empty($pesan) ){
								echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
								echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Peringatan!</strong> Pesan Tidak Boleh Kosong';
								echo '</div>';
							} else if ( empty($kode) ){
								echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
								echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Peringatan!</strong> Hasil Hitung Tidak Boleh Kosong';
								echo '</div>';
							} else if ( !preg_match("/^[a-zA-Z .,]*$/",$nama) ){
								echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
								echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
								echo '<strong>Peringatan!</strong> Nama Lengkap Tidak Boleh Mengandung Angka Atau Karakter';
								echo '</div>';
							} else {
								if ( $kode <> $_SESSION['key'] ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> Hasil Hitung Yang Anda Masukan Salah';
									echo '</div>';
								} else if ( !filter_var( $email, FILTER_VALIDATE_EMAIL ) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong> E-Mail Yang Anda Masukan Tidak Valid';
									echo '</div>';
								}

								else {
									$query75 = $db->prepare("INSERT INTO hubungi (nama,email,subjek,pesan,dibuka,tanggal) VALUES (?,?,?,?,?,?)");
									$query75->bind_param("ssssss", $nama, $email, $subjek, $pesan, $dibuka, $tanggal);
									$query75->execute();
									echo '<div class="alert alert-success" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>SUKSES!</strong> Terimakasih telah menghibungi kami. Pihak kami akan segera membalas pesan ke email Anda';
									echo '</div>';
									echo "<meta http-equiv='refresh' content='3; url=hubungi-kami.html'>";
								}
							}
						}
					?>
						<h4 class="wow fadeIndown animated" data-wow-delay=".5s">Hubungi Kami</h4>
						<form method="POST" action="">
							<input name="nama" value="<?php echo isset( $nama ) ? $nama : ""; ?>" class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Nama Lengkap" required="">
							<input name="email" value="<?php echo isset( $email ) ? $email : ""; ?>" class="wow fadeIndown animated" data-wow-delay=".7s" type="text" placeholder="E-Mail" required="">
							<input name="subjek" value="<?php echo  isset( $subjek ) ? $subjek : ""; ?>" class="wow fadeIndown animated" data-wow-delay=".8s" type="text" placeholder="Subjek" required="">
							<textarea name="pesan" class="wow fadeIndown animated" data-wow-delay=".8s" placeholder="Pesan" required=""><?php echo isset( $pesan ) ? $pesan : ""; ?></textarea>
							<img src="captcha/captcha.php" style="margin-top : 1.5em; margin-bottom : 1.5em;" />
							<input name="kode" class="wow fadeIndown animated" data-wow-delay=".6s" type="text" placeholder="Masukan Hasil Hitungan Matematika Diatas" required="">
							<input class="wow fadeIndown animated" data-wow-delay=".9s" type="submit" name="hubungi" value="KIRIM">
						</form>
					</div>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated" data-wow-delay=".5s">
						<h4>Alamat</h4>
						<p><?php echo $row00['alamat']; ?></p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated" data-wow-delay=".7s">
						<h4>Nomor Telepon </h4>
						<p><?php echo $row00['nomor_hp']; ?></p>
					</div>
					<div class="address-info wow fadeInRight animated" data-wow-delay=".6s">
						<h4>E-Mail</h4>
						<p><a href="mailto:<?php echo $row00['email_pengelola']; ?>"> <?php echo $row00['email_pengelola']; ?></a></p>
					</div>
				</div>
			</div>	
		</div>	
	</div>
	<!--//contact-->	