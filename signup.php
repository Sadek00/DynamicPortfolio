<?php
	session_start();
	
?>

<!-- vendor css -->
            <link href="Dashboard/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
            <link href="Dashboard/assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">


            <!-- Starlight CSS -->
            <link rel="stylesheet" href="Dashboard/assets/css/starlight.css">


		<div class="d-flex align-items-center justify-content-center bg-sl-primary ht-md-100v">

      <div class="login-wrapper wd-300 wd-xs-400 pd-25 pd-xs-40 bg-white">
        <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
        <div class="tx-center mg-b-60">Professional Admin Template Design</div>
		  	<form action="Register-post.php" method="POST"> <!-- Connection Of Register_post page -->
		  		<div class="form-group">
				    <label for="exampleInputName1">Name</label>
				    <input type="text" class="form-control <?php  
				    if (isset($_SESSION['NameErr'])) {
				    	echo 'NameErr';
				    }
				 	?>" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter Name">
					<span class="text-danger">
					<style>
							.NameErr{
								border: 1px solid red 
								}
					</style>
					<?php
						if (isset($_SESSION['NameErr'])) {
							echo $_SESSION['NameErr'];
							unset($_SESSION['NameErr']);

						}
						if (isset($_SESSION['NameExist'])) {
							echo $_SESSION['NameExist'];
							unset($_SESSION['NameExist']);

						}
					?>
					</span>
				</div>

				<div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				    <span class="text-danger">
					<?php
						if (isset($_SESSION['EmailValidateErr'])) {
							echo $_SESSION['EmailValidateErr'];
							unset($_SESSION['EmailValidateErr']);

						}
						if (isset($_SESSION['EmailValidationErr'])) {
							echo $_SESSION['EmailValidationErr'];
							unset($_SESSION['EmailValidationErr']);

						}
					?>
					</span>
				</div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
				      <span class="text-danger">
					<?php
						if (isset($_SESSION['PasswordErr'])) {
							echo $_SESSION['PasswordErr'];
							unset($_SESSION['PasswordErr']);

						}
					?>
					</span>
				</div>
				 <div class="form-group">
				    <label for="exampleInputPassword1">Confirm Password </label>
				    <input type="password" class="form-control" name="confirm_password" id="exampleInputPassword1" placeholder="Confirm Password">
				      <span class="text-danger">
					<?php
						if (isset($_SESSION['Confirm_passwordErr'])) {
							echo $_SESSION['Confirm_passwordErr'];
							unset($_SESSION['Confirm_passwordErr']);

						}
						if (isset($_SESSION['Confirm_passwordMatchErr'])) {
							echo $_SESSION['Confirm_passwordMatchErr'];
							unset($_SESSION['Confirm_passwordMatchErr']);

						}
					?>
					</span>
				</div>
				<div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label" for="exampleCheck1">Check me out</label>
				</div>
				<div class="form-check text-center">
				  <button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>


  		
  	</div>
  </div>

  			<script src="Dashboard/assets/lib/jquery/jquery.js"></script>
        <script src="Dashboard/assets/lib/popper.js/popper.js"></script>
        <script src="Dashboard/assets/lib/bootstrap/bootstrap.js"></script>
