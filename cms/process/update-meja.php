<?php 

include 'koneksi.php';
$nm = $_POST['nm_meja'];
$id_meja = $_POST['id_meja'];
$date = date("Y-m-d h:i:s");

// $sql = "UPDATE tb_meja (nm_meja, created_at, updated_at) values( '$nm',  '$date', '$date')";
$sql = "UPDATE tb_meja set nm_meja = '$nm', updated_at = '$date' where id_meja = '$id_meja'";
$edit = mysqli_query($con, $sql);
// var_dump($sql);
// die();

	header('Location:../index.php?page=daftar-meja');

 ?>