<?php 
include "koneksi.php";

	// $query = mysqli_query($con, "SELECT a.id_transaksi, a.id_meja, b.qty, b.is_done, b.total, c.nm_menu, c.harga, d.nm_meja FROM tb_transaksi a JOIN tb_detail_transaksi b ON a.id_transaksi = b.id_transaksi JOIN tb_menu c ON b.id_menu = c.id_menu JOIN tb_meja d ON a.id_meja=d.id_meja where c.location='dapur'");
	
	$query = mysqli_query($con, "SELECT * FROM tb_transaksi a JOIN tb_meja b ON a.id_meja=b.id_meja where a.bar_closed is NULL" );
	// $query = mysqli_query($con, "SELECT * FROM tb_transaksi");
	$data = array();
	while($row = mysqli_fetch_array($query)) {
			$id = $row['id_transaksi'];

			$det = mysqli_query($con, "SELECT * FROM tb_detail_transaksi a JOIN tb_menu b ON a.id_menu=b.id_menu where a.id_transaksi=$id and b.location='bar'");
			$detail = array();

			while($child = mysqli_fetch_array($det)) {
			    $detail[] = $child;
			}

	        array_push($data, array(
	        	'data' => $row, 
	        	'child' => $detail
	        ));
	}
	echo json_encode($data);
?>