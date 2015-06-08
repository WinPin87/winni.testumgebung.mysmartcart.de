<?php 
	session_start();
	unset($_SESSION['username']);
	header('Location: http://sibe.mysmartcart.de/');
?>