<?php
	$sid      = session_id();
	$query20  = $db->query("SELECT SUM(jumlah*(harga-(diskon/100)*harga)) as total,SUM(jumlah) as totaljumlah FROM orders_temp, produk WHERE id_session='$sid' AND orders_temp.id_produk=produk.id_produk");
	$query21  = $db->query("SELECT produk.id_produk FROM orders_temp, produk WHERE id_session='$sid' AND orders_temp.id_produk=produk.id_produk");
	$jumlah21 = $query21->num_rows;
	while ( $row20     = $query20->fetch_assoc() ){
		if ( $row20['totaljumlah'] == "" ){
			echo 0;
		} else {
			$total_harga20 = number_format( $row20['total'],0,",","." );
			echo $total_harga20;
		} 
	}

?>