<?php
	session_start();
	require_once'../database.php';
	$name=$_POST['name'];
	$summary=$_POST['summary'];
	$icon=$_POST['icon'];

	$insert="INSERT INTO services(name,icon,summary) VALUES('$name','$icon','$summary')";
	$insert_user=mysqli_query($db,$insert);

	if ($insert_user) {
		$_SESSION['insert'] = 'Insert Succesfully';
		header('location: services.php');
	}

?>