<?php 
session_start();
if (!empty($_SESSION['status'])) {
    // var_dump($_SESSION['status']);
    header("location:index.php");
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login CMS</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
</head>
<body style="background-image: url('images/bg.jpg'); background-size: cover">
	<div class="col-md-2 col-md-offset-5" style="margin-top: 200px">
		<center><p style="font-size: 2rem; color: white">Administrator</p></center>
		<form action="process/login.php" method="post">
			<label style="color: white">Username</label>
			<input type="text" name="username" class="form-control">
			<label style="color: white">Password</label>
			<input type="password" name="password" class="form-control">
			<br>
			<input type="submit" name="simpan" class="btn btn-primary btn-block">
		</form>
	</div>
		
</body>
</html>