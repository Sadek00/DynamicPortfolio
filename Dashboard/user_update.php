<?php
	session_start();
	require_once'../database.php';
	$id=$_SESSION['user_iq'];
	$name=$_POST['name'];
	$email=$_POST['email'];

	$edit="UPDATE user_form SET name='$name', email='$email' WHERE id=$id";
	$edit_user=mysqli_query($db,$edit);

	if ($edit_user) {
		$_SESSION['Update'] = 'Update Succesfully ';
		header('location: user.php');
	}

?>