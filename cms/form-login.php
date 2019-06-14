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
<body>
	<div class="col-md-4 col-md-offset-4" style="margin-top: 100px">
		<center><h1>Silahkan Login</h1></center>
		<form action="process/login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form-control">
			<label>Password</label>
			<input type="password" name="password" class="form-control">
			<br>
			<input type="submit" name="simpan" class="btn btn-primary">
		</form>
	</div>
		
</body>
</html>