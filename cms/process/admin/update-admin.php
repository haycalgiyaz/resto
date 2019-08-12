<?php 

include '../koneksi.php';
$id_user = $_POST['id_admin'];
$nm_user = $_POST['nama_admin'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$date = date("Y-m-d h:i:s");

// $sql = "UPDATE tb_meja (nm_meja, created_at, updated_at) values( '$nm',  '$date', '$date')";
$sql = "UPDATE tb_admin set nama_admin = '$nm_user', username='$username', password='$password', updated_at = '$date' where id_admin = '$id_user'";
$edit = mysqli_query($con, $sql);
// var_dump($sql);
// die();

	header('Location:../../index.php?page=manage-admin');

 ?>