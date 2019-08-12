<?php

		include '../koneksi.php'; 
		$nm_user = $_POST['nama_admin'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$date = date("Y-m-d h:i:s");

		$sql = "INSERT INTO tb_admin (nama_admin,username,password, created_at, updated_at) values( '$nm_user','$username','$password', '$date', '$date')";
		$insert = mysqli_query($con, $sql);
		
		header('Location:../../index.php?page=manage-admin');
?>