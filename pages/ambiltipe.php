<?php
	require "../config/koneksi.php";
	$query18      = $db->query("SELECT id_subkategori,nama_subkategori FROM subkategori_produk WHERE id_kategori='$_GET[propinsi]' ORDER BY nama_subkategori ASC");
	echo '<option value="" disabled selected> -- Pilih Product -- </option>';
	while ( $row18 = $query18->fetch_assoc() ){
		echo '<option value="'.$row18['nama_subkategori'].'">'.$row18['nama_subkategori'].'</option>';
	}
?>
