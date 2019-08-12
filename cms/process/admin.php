<?php 	
	include 'process/koneksi.php';

	// Untuk mendapatkan data profil ADMIN
	if ($act == 'get-profile') 
	{
		$id = $_SESSION['id'];

		$sql = "SELECT * FROM tb_admin where id_admin = $id";
		$query = mysqli_query($con, $sql);

		$data = mysqli_fetch_array($query);

		include 'view/profile.php';
	}
	elseif ($act == 'manage-admin') 
	{
		$sql = "SELECT * FROM tb_admin";
		$query = mysqli_query($con, $sql);

		include 'view/manage-admin.php';
	}
	elseif ($act == 'edit-admin') 
	{
		$sql = "SELECT * FROM tb_admin WHERE id_admin='".$id."'";
		$query = mysqli_query($con, $sql);
		$data = mysqli_fetch_array($query);

		include 'view/edit-admin.php';
	}
	elseif ($act == 'input-admin') 
	{
		include 'view/input-admin.php';
	}

 ?>