<?php 	
	include 'process/koneksi.php';

	// Untuk mendapatkan data profil ADMIN
	if ($act == 'get-transaksi') 
	{

		$sql = "SELECT * FROM tb_transaksi a JOIN tb_meja b ON a.id_meja=b.id_meja";
		$query = mysqli_query($con, $sql);


		include 'view/daftar-transaksi.php';

	}
	elseif ($act == 'view-transaksi') 
	{
		// search transaksi
		$sql = "SELECT * FROM tb_transaksi a JOIN tb_meja b ON a.id_meja=b.id_meja where a.id_transaksi = '".$id."'";
		// $sql = "SELECT * FROM tb_transaksi  where id_transaksi = '".$id."'";
		$queryT = mysqli_query($con, $sql);
		$transaksi = mysqli_fetch_array($queryT);

		$sqlDetail = "SELECT * FROM tb_detail_transaksi a JOIN tb_menu b ON a.id_menu=b.id_menu where a.id_transaksi = '".$id."'";
		$detail = mysqli_query($con, $sqlDetail);

		// echo '<pre>' . var_export($data, true) . '</pre>';

		include 'view/detail-transaksi.php';
	}

 ?>