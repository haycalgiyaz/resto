<?php 
session_start();
include 'koneksi.php';

if (isset($_POST['act'])) {
	
	$id_waiters = $_SESSION['id'];
	$meja = $_POST['meja'];
	$tgl = date('Y-m-d H:i:s');

	$sql = "INSERT INTO tb_transaksi (id_transaksi, id_waiters, id_meja, created_at) values ('', '$id_waiters', '$meja', '$tgl')";
	$con->query($sql);

    $last_id = $con->insert_id;
    $subtotal = 0;
    $service = 0;

    foreach ($_POST['id'] as $key => $value) {
    	$id_menu = $_POST['id'][$key];
    	$qty = $_POST['qty'][$key];
    	$price = $_POST['price'][$key];
    	$total = $qty*$price;
    	$subtotal += $total;
    	$service += 10/100*$subtotal;
    	echo "ID: ".$value.", QTY: ".$qty.", PRICE: ".$price.", TOTAL: ".$total.", SUBTOTAL: ".$subtotal."<br>";

    	$item = "INSERT INTO tb_detail_transaksi (id_detail_transaksi, id_transaksi, id_menu, qty, total, request, is_done) values ('', '$last_id', '$id_menu', '$qty', '$total', '', 0)";
    	$con->query($item);
    }
    $grand_total = $subtotal + $service;

    $sql = "UPDATE tb_transaksi SET sub_total = $subtotal, service = $service, total_akhir = $grand_total where id_transaksi = $last_id";
    $con->query($sql);

}

if (isset($_GET['act'])) {
    $key = $_GET['act'];
    $id = $_GET['id'];

    if ($key == "do-order") {
        $sql = "UPDATE tb_detail_transaksi SET is_done = 1 where id_detail_transaksi = $id";
        $con->query($sql);
    }elseif($key == 'cancell-order'){
        $sql = "UPDATE tb_detail_transaksi SET is_done = 5 where id_detail_transaksi = $id";
        $con->query($sql);
    }elseif ($key == 'done-order') {
        $sql = "UPDATE tb_detail_transaksi SET is_done = 2 where id_detail_transaksi = $id";
        $con->query($sql);
    }

    header("location: ../dapur.php");

    
}

 ?>