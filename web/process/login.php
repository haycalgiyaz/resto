<?php 


include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$login = mysqli_query($con, "select * from tb_user where username='$username' and password='$password'" );

// var_dump($login);
// die();

$cek = mysqli_num_rows($login);
$data = mysqli_fetch_array($login);

if ($cek > 0) {
	$role = $data['role'];

	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['id'] = $data['id_user'];
	$_SESSION['login'] = "true";
	
	if($role == 4) {
		$_SESSION['meja'] = "true";
		header("location:../index.php");
	}elseif($role ==5) {
		$_SESSION['dapur'] = "true";
		header("location:../dapur.php");
	}elseif($role ==6) {
		$_SESSION['barista'] = "true";
		header("location:../bar.php");
	}elseif($role ==3) {
		$_SESSION['kasir'] = "true";
		// header("location:../dapur.php");
	}

} else {
	header("location:../form-login.php?s=1");
}

 ?>