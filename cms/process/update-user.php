<?php 

include 'koneksi.php';
$id_user = $_POST['id_user'];
$nm_user = $_POST['nm_user'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$jk_user = $_POST['jk_user'];
$no_tlp = $_POST['no_tlp'];
$almt_user = $_POST['almt_user'];
$nm_departemen = $_POST['nm_departemen'];
$role = $_POST['role'];
$date = date("Y-m-d h:i:s");

// $sql = "UPDATE tb_meja (nm_meja, created_at, updated_at) values( '$nm',  '$date', '$date')";
$sql = "UPDATE tb_user set nm_user = '$nm_user', username='$username', password='$password', jk_user='$jk_user',no_tlp='$no_tlp',almt_user='$almt_user',nm_departemen='$nm_departemen',img_url='',role='$role', updated_at = '$date', created_at = '$date' where id_user = '$id_user'";
$edit = mysqli_query($con, $sql);
// var_dump($sql);
// die();

	header('Location:../index.php?page=daftar-user');

 ?>