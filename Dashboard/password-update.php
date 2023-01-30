<?php
	session_start();
	require_once'../database.php';
	$id=$_SESSION['id'];
	$current_password=$_POST['current_password'];
	$new_password=$_POST['new_password'];
	$confirm_password=$_POST['confirm_password'];
	$hash=password_hash($new_password, PASSWORD_DEFAULT);
	$verify_password=$_SESSION['password']; // Database e store kora encripted password

	if (password_verify($current_password, $verify_password)) {

			$update="UPDATE user_form SET password='$hash' WHERE id=$id";
			$update_password=mysqli_query($db,$update);

			if ($update_password) {

				$_SESSION['Update'] = 'Update Succesfully ';
				header('location: dashboard.php');
			}

	}
	else{
		$_SESSION['PasswordErr'] = 'Please Enter Valid Password';
		header('location:change-password.php');
	}

	
?>