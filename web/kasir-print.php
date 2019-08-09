<?php 

include 'process/koneksi.php';

session_start();
// if (!isset($_SESSION['dapur'])) {
// 	header("Location: process/logout.php");
// }
if (!isset($_SESSION['kasir'])) {
	header("Location: process/logout.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Kasir</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="asset/css/manual.css">
	<script src="asset/js/jquery.js"></script>
	<script src="asset/js/bootstrap.js"></script>
	<script src="asset/js/jquery-2.2.3.min.js"></script>
	<script type='text/javascript' src="asset/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
	<main>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<table class="table table-default">
					<thead>
						<tr>
							<th>Meja</th>
							<th>Service</th>
							<th>Grand Total</th>
							<th>Payment Method</th>
							<th>Created At</th>
						</tr>
					</thead>
					<tbody>
				<?php 
					include "process/koneksi.php";
					$id_casheer = $_SESSION['id'];
	
					$query = mysqli_query($con, "SELECT * FROM tb_transaksi a JOIN tb_meja b ON a.id_meja=b.id_meja where a.status = 1 and a.id_kasir = $id_casheer" );
					while($row = mysqli_fetch_array($query)) {
						// echo '<pre>' . var_export($row, true) . '</pre>';
						?>
						<tr>
							<td><?php echo $row['nm_meja'] ?></td>
							<td><?php echo $row['service'] ?></td>
							<td><?php echo $row['total_real'] ?></td>
							<td><?php echo $row['payment_method'] ?></td>
							<td><?php echo $row['created_at'] ?></td>
						</tr>
					<?php }
				?>
					</tbody>
				</table>

			</div>
		</div>
<script>
	window.print();
</script>

</body>
</html>
