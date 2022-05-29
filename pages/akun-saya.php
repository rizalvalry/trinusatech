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
					<?php
						$query79 = $db->query("SELECT kustomer.id_kustomer, kustomer.nama_lengkap, kustomer.email, kustomer.alamat, kustomer.telpon, kec.nama_kec FROM kustomer LEFT JOIN kec ON kec.id_kec=kustomer.id_kec WHERE kustomer.email='$_SESSION[pbemail]'");
						$row79   = $query79->fetch_assoc();
					
					?>
					<form method="POST" action="">					
						<h4> Hi, <?php echo $_SESSION['pbnama']; ?> ! </h4>
						<p>Terimakasih telah percaya pada <?php echo $row00['nama_toko']; ?> sebagai salah satu toko online pilhan Anda :) <span class="pull-right"><button name="simpan" class="btn btn-info" data-toogle="tooltip" title="SIMPAN"><i class="glyphicon glyphicon-file"></i> SIMPAN</button></span> </p>
						<br />
						<hr />
						<p>
						<?php
							if ( isset($_POST['simpan']) ){
								$nama81        = $_POST['nama'];
								$email81       = $_POST['email'];
								$tlp81         = $_POST['tlp'];
								$alamat81      = $_POST['alamat'];
								$kec81         = $_POST['kec'];
								$id_kustomer81 = $row79['id_kustomer'];
								
								if ( empty($nama81) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong>  Nama Lengkap Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($email81) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong>  E-Mail Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($tlp81) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong>  Nomor Telepon Tidak Boleh Kosong';
									echo '</div>';
								} else if ( empty($alamat81) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong>  Alamat Tidak Boleh Kosong';
									echo '</div>';
								}else if ( !preg_match("/^[a-zA-Z .,]*$/",$nama81) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong>  Nama Lengkap Tidak Boleh Mengandung Angka dan Katakter';
									echo '</div>';
								} else if ( !preg_match("/^[0-9+]*$/",$tlp81) ){
									echo '<div class="alert alert-danger" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>Peringatan!</strong>  Nomor Telepon Tidak Boleh Mengandung Huruf dan Katakter';
									echo '</div>';
								} else {
									$query81 = $db->prepare("UPDATE kustomer SET nama_lengkap=?, email=?, alamat=?, telpon=?, id_kec=? WHERE id_kustomer=?");
									$query81->bind_param("ssssii", $nama81, $email81, $alamat81, $tlp81, $kec81, $id_kustomer81);
									$query81->execute();
									echo '<div class="alert alert-success" role="alert" style="font-size : 12px; padding : 5px;">';
									echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
									echo '<strong>SUKSES!</strong> Data berhasil diubah, Anda akan keluar secara otomatis dari akun Anda. Silahkan masuk kembali';
									echo '</div>';
									session_destroy();
									echo "<meta http-equiv='refresh' content='2; url=login-member.html'>";
								}
							}
						?>
							<div class="form-group">
								<label>Nama Lengkap</label>
								<input type="text" name="nama" class="form-control" value="<?php echo $row79['nama_lengkap']; ?>" maxlength="50" required />
							</div>
							<div class="form-group">
								<label>E-Mail</label>
								<input type="email" name="email" class="form-control" value="<?php echo $row79['email']; ?>" maxlength="50" required  />
							</div>
							<div class="form-group">
								<label>Nomor Telepon</label>
								<input type="text" name="tlp" class="form-control" value="<?php echo $row79['telpon']; ?>" maxlength="15" required  />
							</div>
							<div class="form-group">
								<label>Alamat</label>
								<input type="text" name="alamat" class="form-control" value="<?php echo $row79['alamat']; ?>" maxlength="150" required  />
							</div>
							<div class="form-group">
								<label>Kecamatan</label>
								<input type="text" class="form-control" value="<?php echo $row79['nama_kec']; ?>" disabled  />
							</div>
							<div class="form-group">
								<label>Provinsi</label>
								<select name="propinsi" id="propinsi" class="form-control">
									<option value="" disabled selected> -- Pilih Provinsi -- </option>
									<?php
										$query80       = $db->query("SELECT id_prov, nama_prov FROM prov ORDER BY nama_prov ASC");
										while ( $row80 = $query80->fetch_assoc() ){
											echo '<option value="'.$row80['id_prov'].'" >'.$row80['nama_prov'].'</option>';
										}
									?>
								</select>
							</div>
							<div class="form-group">
								<label>Kabupaten/Kota</label>
								<select name="kota" id="kota" class="form-control">
									<option value="" disabled selected> -- Pilih Kabupaten/Kota -- </option>
								</select>
							</div>
							<div class="form-group">
								<label>Kecamatan</label>
								<select name="kec" id="kec" class="form-control">
									<option value="" disabled selected> -- Pilih Kecamatan -- </option>
								</select>
							</div>
						</p>
					</form>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--//products-->
	<!--//Module-select-city-->
	<script type="text/javascript">
	var htmlobjek;
	$(document).ready(function(){
	  //apabila terjadi event onchange terhadap object <select id=propinsi>
	  $("#propinsi").change(function(){
		var propinsi = $("#propinsi").val();
		$.ajax({
			url: "ambilkota.php",
			data: "propinsi="+propinsi,
			cache: false,
			success: function(msg){
				//jika data sukses diambil dari server kita tampilkan
				//di <select id=kota>
				$("#kota").html(msg);
			}
		});
	  });
	  $("#kota").change(function(){
		var kota = $("#kota").val();
		$.ajax({
			url: "ambilkecamatan.php",
			data: "kota="+kota,
			cache: false,
			success: function(msg){
				$("#kec").html(msg);
			}
		});
	  });
	});

	</script>
	<!--//end-module-select-city-->
<?php
	} else {
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
	}
?>