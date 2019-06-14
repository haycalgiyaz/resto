<?php 
	
	include 'process/koneksi.php';

	if ($act == 'get-menu') {
		
		$sql = 'SELECT * FROM tb_menu';
		$query = mysqli_query($con, $sql);
		include('view/daftar-menu.php');

	}elseif ($act== 'edit') {
		$sql = "SELECT * FROM tb_menu where id_menu = '".$id."'";
		$query = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($query);
		
		include('view/edit-menu.php');
	}
 ?>