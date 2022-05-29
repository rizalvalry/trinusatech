	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow fadeInUp" data-wow-delay=".5s">
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Lupa Kata Sandi ?</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--login-->
	<div class="login-page">
		<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
			<h3 class="title">Reset<span> Kata Sandi</span></h3>
		</div>
		<div class="widget-shadow">
			<div class="login-top wow fadeInUp animated" data-wow-delay=".7s">
				<h4>Silahkan masukan E-mail akun Anda</h4>
			</div>
			<div class="login-body wow fadeInUp animated" data-wow-delay=".7s">
				<form method="POST" action="">
				<?php
					if ( isset( $_POST['masuk'] ) ){
						$email41  = $_POST['email'];
						$query41  = $db->prepare("SELECT email FROM kustomer WHERE email = ?");
						$query41->bind_param("s", $email41);
						$query41->execute();
						$result41 = $query41->get_result();
						$row41    = $result41->fetch_assoc();
						
						if ( empty($email41) ){
							echo '<div class="alert alert-danger alert-login" role="alert">';
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<strong>PERINGATAN!</strong> E-Mail Tidak Boleh Kosong';
							echo '</div>';
						} else if ( $email41 <> $row41['email'] ){
							echo '<div class="alert alert-danger alert-login" role="alert">';
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<strong>PERINGATAN!</strong> E-Mail Yang Anda Masukan Salah';
							echo '</div>';
						} else {
							$ksbaru41 = substr( md5( uniqid( rand(),1 ) ),3,10 );
							$cost     = ['cost' => 10,];
							$hash     = password_hash($ksbaru41, PASSWORD_BCRYPT,$cost);
							$query42  = $db->prepare("UPDATE kustomer SET password = ? WHERE email = ?");
							$query42->bind_param("ss", $hash, $email41);
							$query42->execute();
							
							$subjek42 = 'Kata Sandi Baru';
							$pesan42  = 'Kata sandi baru Anda '.$ksbaru41.'';
							$dari 	  = 'From: '. $row00['email_pengelola'].'\r\n';
							$dari    .= "Content-type: text/html\r\n";
							if ( $row00['email_protokol'] == "Surat" ){
								mail ( $email41, $subjek42, $pesan42, $dari );
							} else {
								include "config/php-mail/function.php";
								smtp_mail($email41, $subjek42, $pesan42);
							}
							
							echo '<div class="alert alert-success alert-login" role="alert">';
							echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
							echo '<strong>SUKSES!</strong> Kata sandi Anda telah direset, silahkan buka E-mail Anda untuk melihat kata sandi baru';
							echo '</div>';
							echo "<meta http-equiv='refresh' content='2; url=index.php'>";
						}
						
					}
				
				?>
					<input type="email" class="user" name="email" placeholder="E-Mail" required="">
					<input type="submit" name="masuk" value="Kirim Kata Sandi Baru">
					<div class="forgot-grid">
						<div class="clearfix"> </div>
					</div>
				</form>
			</div>
		</div>
		<div class="login-page-bottom">
		</div>
	</div>
	<!--//login-->