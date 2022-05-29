	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Masuk</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Form<span> Masuk</span></h3>
			<p>Silahkan masukan E-Mail dan Password Anda untuk melakukan proses pembelian</p>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Selamat Datang Kembali Di <?php echo $row00['nama_toko']; ?><br> Bukan Member ? <a href="memberdaftar-sekarang.html">  Daftar Sekarang »</a> </h4>
			</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
				<form method="POST" action="aksi_loginmember.php">
					<input type="text" class="user" name="email" placeholder="E-Mail" required="">
					<input type="password" name="password" class="lock" placeholder="Kata Sandi">
					<input type="submit" name="masuk" value="Masuk">
					<div class="forgot-grid">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i></i>Ingatkan Saya</label>
						<div class="forgot">
							<a href="lupa-password.html">Lupa Kata Sandi ?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!--//login-->