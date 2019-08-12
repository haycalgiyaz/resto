<?php 
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($con, "select * from tb_admin where username='$username' and password='$password'" );

$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($cek > 0) {
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['id'] = $data['id_admin'];
	$_SESSION['status'] = "login";
	
	header("location:../index.php");
} else {
	header("location:../form-login.php");
}

 ?>