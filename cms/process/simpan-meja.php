<?php 

include 'koneksi.php';
$nm = $_POST['nm_meja'];
$date = date("Y-m-d h:i:s");

$sql = "INSERT INTO tb_meja (nm_meja, created_at, updated_at) values( '$nm',  '$date', '$date')";
$insert = mysqli_query($con, $sql);
// var_dump($sql);
// die();

	header('Location:../index.php?page=daftar-meja');

 ?>