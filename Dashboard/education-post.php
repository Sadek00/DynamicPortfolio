<?php
	session_start();
	require_once'../database.php';
	$title=mysqli_real_escape_string($db, $_POST['title']);
	$passing_year=$_POST['passing_year'];
	$progress=$_POST['progress'];

	$insert="INSERT INTO education (title,passing_year,progress) VALUES('$title','$passing_year','$progress')";
	$insert_user=mysqli_query($db,$insert);

	if ($insert_user) {
		$_SESSION['Update'] = 'Insert Succesfully';
		header('location: education.php');
	}

?>