<?php 
include 'koneksi.php';

if ($act == 'view') {

	$query = 'SELECT * FROM tb_user';
	$sql = mysqli_query($con, $query);
	

}elseif ($act == 'input') {

}elseif ($act == 'edit') {
	$query = "SELECT * FROM tb_user where id_user = '".$id."'";
	$sql = mysqli_query($con, $query);

}elseif ($act == 'hapus') {
	$query = "DELETE FROM tb_user WHERE id_user='".$id."'";
	$sql = mysqli_query($con, $query);
	// header('Location:../index.php?page=daftar-meja');
}

 ?>