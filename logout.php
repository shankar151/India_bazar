<?php
	session_start();
	unset($_SESSION['user_id']);
	unset($_SESSION['email']);
	unset($_SESSION['password']);
	header('location:index.php');
?>