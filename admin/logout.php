<?php
	session_start();
	unset($_SESSION['admin_email']);
	unset($_SESSION['admin_password']);
	
	header('location:admin_login.php');
?>