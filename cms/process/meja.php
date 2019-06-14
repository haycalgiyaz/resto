<?php 
include 'koneksi.php';

if ($act == 'view') {

	$query = 'SELECT * FROM tb_meja';
	$sql = mysqli_query($con, $query);
	

}elseif ($act == 'input') {

}elseif ($act == 'edit') {
	$query = "SELECT * FROM tb_meja where id_meja = '".$id."'";
	$sql = mysqli_query($con, $query);

}elseif ($act == 'hapus') {
	$query = "DELETE FROM tb_meja WHERE id_meja='".$id."'";
	$sql = mysqli_query($con, $query);
	// header('Location:../index.php?page=daftar-meja');
}

 ?>