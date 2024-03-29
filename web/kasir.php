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
<body style="background-image: url('asset/images/kasir.jpg'); background-size: cover;">

	<main>
		<section id="navbar">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavBar">
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="">Warung Bebek Kemang</a>
						<ul class="nav navbar-nav ">
						<li>
							<a href="kasir-riwayat.php"> Riwayat Transaksi</a></li>
						</ul>
					</div>
					<div class="collapse navbar-collapse" id="MyNavBar">
						<ul class="nav navbar-nav navbar-right">
							<!-- <li><a class="glyphicon glyphicon-user" href=""> User</a></li> -->
							<li class="dropdown">
					        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akun <span class="caret"></span></a>
				          		<ul class="dropdown-menu">
				            		<li><a href="process/logout.php">Logout</a></li>
				          		</ul>
					        </li>
						</ul>
					</div>
				</div>
			</nav>
		</section>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
				<h1>Casher</h1>
				<hr>
				<h4>Warung Bebek Kemang</h4>
				<div id="progressBar" style="margin-bottom: 20px"></div>				
			</div>

			<div  id="listing-data" class="col-md-8 col-md-offset-2">
			</div>
		</div>


<script type="text/javascript">
	$( document ).ready(function() {
	    dataOrder();

	});

	function dataOrder(){
		console.log('refresh');
		$.get("process/data-kasir.php?data=all", function(data, status){
	      	var	data_detail = '';
	      	var html ='';
	      	
	      	$.each(JSON.parse(data), function(i, item) {
	      		console.log(item);
	      		var status = 0;
	      		var total_real = 0;
				html+= 	'<div class="panel-group">';
				html+= 	'<div class="panel panel-primary">';
				html+= 	'<div class="panel-heading">';
				html+= 	'<h4 class="panel-title">';
				html+= 	'<a data-toggle="collapse" href="#collapse'+i+'">'+item.data.nm_meja+'</a>';
				html+= 	'</h4>';
				html+= 	'</div>';
				if (i < 1) {
					html+= 	'<div id="collapse'+i+'" class="panel-collapse collapse in" aria-expanded=true>';
				}else{
					html+= 	'<div id="collapse'+i+'" class="panel-collapse collapse">';
				}
		    	html+= 		'<div class="panel-body">';
		    	html+= 			'<table class="table table-default">';
		    	$.each(item.child, function(j, row){
		    		html+= 			'<tr>';
		    		html+= 				'<td>'+row.qty+'x</td>';
		    		html+= 				'<td>'+row.nm_menu+'</td>';
		    		if (row.is_done == 2) {
		    			total_real = parseInt(total_real) + parseInt(row.total);
		    			html+= 			'<td>Rp '+row.total+'</td>';
		    		}else if(row.is_done == 5){
		    			html+= 			'<td>Habis</td>';
		    		}
		    		html+= 			'</tr>';
		    		
		    	});
		    	var grand = parseInt(total_real) + parseInt(item.data.service);
		    	html+= 				'<tr>';
		    	html+= 					'<th colspan=2>Subtotal</th>';
		    	html+= 					'<th>Rp '+total_real+'</th>';
		    	html+= 				'</tr>';
				html+= 				'<tr>';
		    	html+= 					'<td colspan=2>Service</td>';
		    	html+= 					'<td>Rp '+item.data.service+'</td>';
		    	html+= 				'</tr>';
		    	html+= 				'<tr>';
		    	html+= 					'<th colspan=2>Grand Total</th>';
		    	html+= 					'<th>Rp '+grand+'</th>';
		    	html+= 				'</tr>';
		    	html+= 			'</table>';
		    	html+= 			'<hr>';
		    	html+= 			'<h3>Pembayaran</h3>';
		    	html+= 			'<form action="process/checkout-kasir.php" method="post" class="form-parent">';
		    	html+= 			'	<input type="hidden" name="total_real" value="'+total_real+'">';
		    	html+= 			' 	<div class="col-sm-6 col-sm-offset-6">';
		    	html+= 			'		<label>Metode Pembayaran</label>';
		    	html+= 			'		<select class="metode_pembayaran form-control" name="metode_pembayaran" >';
		    	html+= 			'			<option value="cash">Cash</option><option value="debit"> Debit</option><option value="credit">Credit Card</option>';
		    	html+= 			'		</select>';
		    	html+= 			'	</div>';

		    	html+= 			'	<label class="col-sm-6 col-sm-offset-6">Jumlah Dibayar (Rp)</label>';
		    	html+= 			' 	<div class="col-sm-6 col-sm-offset-6 input-group" style="padding-left:15px; padding-right:15px">';
		    	html+= 			'		<input type="hidden" name="id" value="'+item.data.id_transaksi+'">';
		    	html+= 			'		<input type="hidden" class="grand" name="grand" value="'+grand+'">';
		    	html+= 			'		<input type="number" class="form-control purchase" name="purchase">';
		    	html+= 			'		<span class="input-group-btn"><button class="btn btn-default get-price" type="button" onclick="getPrice()">Hitung!</button></span>';

		    	html+= 			'	</div>';
				html+= 			' 	<div class="col-sm-6 col-sm-offset-6">';
		    	html+= 			'		<label>Kembalian (Rp)</label>';
		    	html+= 			'		<input type="number" class="form-control cashback" name="cashback" readonly>';
		    	html+= 			'	</div>';
				html+= 			' 	<div class="col-sm-6 col-sm-offset-6" style="margin-top:10px">';
		    	html+= 			'	 <button type="submit" class="btn btn-success btn-block">';
		    	html+= 			'		Bayar';
		    	html+= 			'	</div>';
		    	html+= 			'</form>';
				html+= 		'</div>';
				html+= 	'</div>';
				if (!status) {
					// html+= 	'<div class="panel-footer" style="overflow:hidden">';
					// html+= 		'<div class="col-md-3">';
					// html+= 			'<h3>Grand Total</h3>';
					// html+= 			'<input type="number" name="grand_total" value="'+grand+'">';
					// html+= 		'</div >';

					// html+= 	'<a href="process/checkout.php?act=do-transaction-kitchen&id='+item.data.id_transaksi+'" class="btn btn-success btn-sm btn-block"  onclick="return confirm(\'Apakah Pesnan sudah selesai?\')">Selesai</a>';
					// html+= 	'</div>';
				}
				html+= 	'</div>';
				html+= 	'</div>';
			});
			$('#listing-data').html('');
			$('#listing-data').append(html);

	    });
	}


	function getPrice(grand) {
		var	purchase = $('.purchase').val();
		var	grand = $('.grand').val();

		var cashback = parseInt(purchase) - parseInt(grand);
		$('.cashback').val(cashback);
		
	}

	

</script>

</body>
</html>
