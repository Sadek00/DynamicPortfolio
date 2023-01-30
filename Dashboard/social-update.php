<?php
	session_start();
	require_once'../database.php';
	$name=$_POST['name'];
	$link=$_POST['link'];
	$icon=$_POST['icon'];

	$insert="INSERT INTO socials(name,link,icon) VALUES('$name','$link','$icon')";
	$insert_user=mysqli_query($db,$insert);

	if ($insert_user) {
		$_SESSION['Update'] = 'Insert Succesfully';
		header('location: social.php');
	}

?>