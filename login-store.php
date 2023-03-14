<?php 
  session_start();
  require_once'database.php';
    
if ($_SERVER['REQUEST_METHOD']== 'POST') {
	$email=$_POST['username'];
	$password=$_POST['password'];

	$select= "SELECT COUNT(*) as total, id, name, email, password, profile_image FROM user_form WHERE email='$email' ";
	$query=mysqli_query($db,$select);
	$assoc=mysqli_fetch_assoc($query);
	$hash=$assoc['password']; // Database e store kora encripted password


	if ($assoc['total']>0 && password_verify($password, $hash)) {
		$_SESSION['email']=$assoc['email'];
		$_SESSION['id']=$assoc['id'];
		$_SESSION['name']=$assoc['name'];
		$_SESSION['password']=$hash;
		header('location:Dashboard/dashboard.php');

	}
	else{
		$_SESSION['PasswordErr'] = 'Email or Password does not match';
		header('location:login.php');
	}
}
else{
	header('location:login.php');

}
?>