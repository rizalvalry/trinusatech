<?php
	$query567 = $db->query("SELECT DISTINCT foto.judul_foto ,galeri.judul_galeri FROM galeri LEFT JOIN foto ON foto.id_galeri=galeri.id_galeri WHERE galeri.id_galeri = '$_GET[id]' ");
	$jml567   = $query567->num_rows;
	$row567   = $query567->fetch_assoc();
	
?>
	<script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
	
	<script type="text/javascript">
	$(function() {
		$('#gallery a').lightBox();
	});
	</script>
	<!--breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Beranda</a></li>
				<li class="active">Foto Galeri : 
				<?php if ($row567['judul_foto']  == "") {
					echo "kosong";
				} else {
					echo $row567['judul_foto'];
				} ?>
				</li>
				
			</ol>
		</div>
	</div>
	<!--//breadcrumbs-->
	<!--Short codes-->
	<div class="codes">
		<div class="container">
			<div class="title-info wow fadeInUp animated" data-wow-delay=".5s">
				
				<?php if ($row567['judul_foto']  == "") {
					echo "<h3 class='title'>Tidak<span> Ada Data</span></h3>";
				} else {
					echo "<h3 class='title'>Foto<span> Galeri</span></h3>";
				} ?>
			</div>
			<div class="col-md-12 product-model-sec-custom2" id="gallery">
			<?php
				$query1234      = $db->query("SELECT foto, judul_foto, keterangan FROM foto WHERE id_galeri = '$_GET[id]' ORDER BY judul_foto ASC");
				while( $row1234 = $query1234->fetch_assoc() ){
			?>
				<div class="product-grids3 simpleCart_shelfItem wow fadeInUp animated" data-wow-delay=".5s">
					<div class="new-top">
						<center><a href="gambar/foto/<?php echo $row1234['foto']; ?>"><img src="gambar/thumb_foto/<?php echo $row1234['foto']; ?>" class="img-responsive" alt=""/></a><center>
						<div class="new-text" style="color : #fff;">
							<h3><?php echo $row1234['judul_foto']; ?></h3>
							<p><?php echo $row1234['keterangan']; ?></p>
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
