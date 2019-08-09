<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['id'])) {

    $total_real = $_POST['total_real'];
    $metode = $_POST['metode_pembayaran'];
    $id = $_POST['id'];
    $grand_total = $_POST['grand'];
    $purchase = $_POST['purchase'];
    $cashback = $_POST['cashback'];
    $id_casheer = $_SESSION['id'];
	
    $sql = "UPDATE tb_transaksi SET id_kasir=$id_casheer, total_real=$grand_total, payment_method='$metode', bayar=$purchase, kembalian=$cashback, status=1 where id_transaksi = $id";
    $con->query($sql);

    header("location:../kasir.php");

}


 ?>