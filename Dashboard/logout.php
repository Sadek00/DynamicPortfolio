<?php  
	require_once 'inc/session.php';
	session_destroy();
	header('location:../login.php');
?>