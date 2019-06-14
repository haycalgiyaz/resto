<?php
session_start();

if ($_SESSION['username']) {
	session_unset();
	session_destroy();
	header("Location: ../form-login.php");
}
else {
	header("Location: ../index.php");
}
?>