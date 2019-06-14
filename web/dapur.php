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
</head>
<body>
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
							<li><a class="glyphicon glyphicon-user" href=""> User</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</section>
		<div class="container">
			<div class="col-md-8 col-md-offset-2">
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
	      	
	      	$.each(JSON.parse(data), function(i, item) {
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
				$.each(item.child, function(j, row){
		    		html+= 		'<div class="panel-body">'+row.qty+'x '+row.nm_menu+'';
					html+=      '</div>';
				});
				html+= 	'</div>';
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
