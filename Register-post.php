<?php 
  session_start();
  require_once'database.php';
    
if ($_SERVER['REQUEST_METHOD']== 'POST') {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$confirm_password=$_POST['confirm_password'];

	//Validation
	$len=strlen($password);
	$user_check="SELECT COUNT(*) as total FROM user_form WHERE name='$email' ";
	$already=mysqli_query($db,$user_check);
	$alreadyExist=mysqli_fetch_assoc($already);
	$regex='/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,15})$/'; //Email validation

	if (empty($name)) {
		$_SESSION['NameErr'] = 'please enter your name';
		header('location:signup.php');
    }

    elseif ($alreadyExist['total']>0) {
		$_SESSION['NameExist'] = 'This User already Exist ';
		header('location:signup.php');
		
    }

	elseif (empty($email)) {
		$_SESSION['EmailValidateErr'] = 'please enter your email';
		header('location:signup.php');

	}
		
	elseif (empty($password) ) {
		$_SESSION['PasswordErr'] = 'please enter your password';
		header('location:signup.php');
	}

	elseif (empty($confirm_password) ) {
		$_SESSION['Confirm_passwordErr'] = 'please enter your confirm_password';
		header('location:signup.php');
	}
	elseif ($password!=$confirm_password) {
		$_SESSION['Confirm_passwordMatchErr'] = 'Password does not match';
		header('location:signup.php');
	}

	elseif (!empty($email) && !preg_match($regex, $email)) {
		$_SESSION['EmailValidationErr'] = 'Your Email is not Valid, Try again';
		header('location:signup.php');
	  
	}
	elseif (!empty($password)&& $len<=8 ) {
		$_SESSION['PasswordErr'] = 'Password Must be 8 Character';
		header('location:signup.php');
		}
		
		  //Insert into Database if validate
     else {
     	$hash=password_hash($password, PASSWORD_DEFAULT);
     	$insert="INSERT INTO user_form(name,email,password)Values('$name','$email','$hash')";
     	$query=mysqli_query($db,$insert);
     	$select = "SELECT * FROM user_form WHERE email='$email'";
     	$queryA=mysqli_query($db,$select);
     	$assoc=mysqli_fetch_assoc($queryA);
     	$_SESSION['email']=$assoc['email'];
			$_SESSION['id']=$assoc['id'];
			$_SESSION['name']=$assoc['name'];
			header('location:Dashboard/dashboard.php');
	}
	
}	

 else {
	header('location:signup.php');
}


 ?>