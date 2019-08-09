<?php 

include 'process/koneksi.php';

session_start();
if (!isset($_SESSION['dapur'])) {
	header("Location: process/logout.php");
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>DAPUR</title>
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
<body style="background-image: url('asset/images/dapur1.jpg'); background-size: cover;">
	<main>
		<section id="navbar">
			<nav class="navbar navbar-default">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#MyNavBar">
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="">Warung Bebek Kemang</a>
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
			<div class="col-md-8 col-md-offset-2 text-right">
				<h1>Kitchen</h1>
				<hr>
				<h4>Dapur Warung Bebek Kemang</h4>
				<div id="progressBar" style="margin-bottom: 20px"></div>				
			</div>

			<div  id="listing-data" class="col-md-8 col-md-offset-2">
			</div>
		</div>


<script type="text/javascript">
	$( document ).ready(function() {
	    dataOrder();

	    var timeLeft = 10;
		var elem = document.getElementById('progressBar');;
		var timerId = setInterval(countdown, 1000);

		function countdown() {
		    if (timeLeft == -1) {
		        timeLeft = 10;
		        dataOrder();
		    } else {
		        elem.innerHTML = 'Data akan di refresh dalam waktu:' + timeLeft + ' detik';
		        timeLeft--;
		    }
		}
	});

	function dataOrder(){
		console.log('refresh');
		$.get("process/data-dapur.php?data=all", function(data, status){
	      	var	data_detail = '';
	      	var html ='';
	      	
	      	var loop = 0;
	      	$.each(JSON.parse(data), function(i, item) {
	      		if (item.child.length == 0) {
	      			return true;
	      		}
	      		loop++;
	      		var status = 0;
				html+= 	'<div class="panel-group">';
				html+= 	'<div class="panel panel-primary">';
				html+= 	'<div class="panel-heading">';
				html+= 	'<h4 class="panel-title">';
				html+= 	'<a data-toggle="collapse" href="#collapse'+i+'">'+item.data.nm_meja+'</a>';
				html+= 	'</h4>';
				html+= 	'</div>';
				if (loop == 1) {
					html+= 	'<div id="collapse'+i+'" class="panel-collapse collapse in" aria-expanded=true>';
				}else{
					html+= 	'<div id="collapse'+i+'" class="panel-collapse collapse">';
				}
				$.each(item.child, function(j, row){
					if (row.is_done != 2 && row.is_done != 5) {
						status = 1;
					}
		    		html+= 		'<div class="panel-body">';
					html+=      '<div class="col-xs-8">';
					if (row.is_done == 0) {
						html+=		'<label class="label label-warning" style="margin-right:5px;"> Waiting ..</label>';
					}else if(row.is_done == 1){
						html+=		'<label class="label label-warning" style="margin-right:5px;"> Cooking .. </label>';
					}else if(row.is_done == 2){
						html+=		'<label class="label label-success" style="margin-right:5px;"> Ready to Serve</label>';
					}else{
						html+=		'<label class="label label-danger" style="margin-right:5px;"> Produk Habis</label>';
					}
		    		html+=		row.qty+'x '+row.nm_menu;
					html+=      '</div>';
					if (row.is_done == 0) {
						html+=      '<div class="col-xs-2" style="padding:1px">';
						html+=		'<a href="process/checkout.php?act=do-order&id='+row.id_detail_transaksi+'" class="btn btn-success btn-sm btn-block"  onclick="return confirm(\'Apakah anda yakin ingin memproses?\')">Process</a>';
						html+=      '</div>';
						html+=      '<div class="col-xs-2" style="padding:1px">';
						html+=		'<a href="process/checkout.php?act=cancell-order&id='+row.id_detail_transaksi+'" class="btn btn-danger btn-sm btn-block" onclick="return confirm(\'Menu ini sudah habis??\')">Habis?</a>';
						html+=      '</div>';
					}else if(row.is_done == 1){
						html+=      '<div class="col-xs-4">';
							html+=		'<a href="process/checkout.php?act=done-order&id='+row.id_detail_transaksi+'" class="btn btn-success btn-sm btn-block" onclick="return confirm(\'Selesai Masak?\')">Selesai?</a>';
						html+=      '</div>';
					}else if(row.is_done == 2){
						html+=      '<div class="col-xs-4">';
							html+=		'<button class="btn btn-success btn-sm btn-block" disabled>Done</button>';
						html+=      '</div>';
					}else{
						html+=      '<div class="col-xs-4">';
							html+=		'<button class="btn btn-danger btn-sm btn-block" disabled>Habis</button>';
						html+=      '</div>';
					}
					html+= 	'</div>';
				});
				html+= 	'</div>';
				if (!status) {
					html+= 	'<div class="panel-footer">';
					html+= 	'<a href="process/checkout.php?act=do-transaction-kitchen&id='+item.data.id_transaksi+'" class="btn btn-success btn-sm btn-block"  onclick="return confirm(\'Apakah Pesnan sudah selesai?\')">Selesai</a>';
					html+= 	'</div>';
				}
				html+= 	'</div>';
				html+= 	'</div>';
			});
			$('#listing-data').html('');
			$('#listing-data').append(html);

	    });
	}
	

</script>

</body>
</html>
