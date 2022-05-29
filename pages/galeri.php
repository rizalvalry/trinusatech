	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Galeri</li>
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				<h3 class="title">Galeri<span> Foto</span></h3>
			</div>
			<div class="col-md-12 product-model-sec-custom2">
			<?php
				$query1234      = $db->query("SELECT id_galeri, judul_galeri, gambar FROM galeri WHERE aktif = 'Y' ORDER BY id_galeri DESC");
				while( $row1234 = $query1234->fetch_assoc() ){
					$query12345 = $db->query("SELECT COUNT(id_foto) AS jumlah FROM foto WHERE id_galeri = '$row1234[id_galeri]'");
					$row12345   = $query12345->fetch_assoc();
			?>
				<div class="product-grids3 simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<center><a href="foto-galeri-<?php echo $row1234['id_galeri']; ?>.html"><img src="gambar/thumb_galeri/<?php echo $row1234['gambar']; ?>" class="img-responsive" alt=""/></a><center>
						<div class="new-text" style="color : #fff;">
							<h2><?php echo $row1234['judul_galeri']; ?></h2>
							<p><?php echo $row12345['jumlah']; ?> Foto</p>
						</div>
					</div>
					<div class="new-bottom">
					</div>
				</div>
			<?php
				}
			?>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>