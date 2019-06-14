<?php

		include 'koneksi.php'; 
		$nm_user = $_POST['nm_user'];
		$username = $_POST['username'];
		$password = md5($_POST['password']);
		$jk_user = $_POST['jk_user'];
		$no_tlp = $_POST['no_tlp'];
		$almt_user = $_POST['almt_user'];
		$nm_departemen = $_POST['nm_departemen'];
		$role = $_POST['role'];
		$date = date("Y-m-d h:i:s");

		$sql = "INSERT INTO tb_user (nm_user,username,password,jk_user,no_tlp,almt_user,nm_departemen,img_url,role, created_at, updated_at) values( '$nm_user','$username','$password','$jk_user','$no_tlp','$almt_user','$nm_departemen','','$role', '$date', '$date')";
		$insert = mysqli_query($con, $sql);
		
		header('Location:../index.php?page=daftar-user');
?>