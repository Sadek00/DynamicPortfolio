
<?php
    require_once'inc/header.php';
    require_once"../database.php";
    	$id=$_SESSION['id'];
		$select="SELECT * FROM user_form WHERE id=$id";
		$query=mysqli_query($db,$select);
		$assoc=mysqli_fetch_assoc($query);
		
?>

      <article class="content error-404-page">
           
         <section class="section">
					 <div class="container">
					  <div class="row">
					  	<div class="col-7 m-auto">

					  		<h2 class="text-center text-success">Change Your Passwords</h2>
							  	<form action="password-update.php" method="POST"> <!-- Connection Of update page -->
							  	
							  		<div class="form-group">
									    <label for="current_password">Current Password</label>
									    <input type="password" class="form-control" name="current_password" id="current_password" placeholder="Enter Current Password">
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
									    <label for="new_password">New Password</label>
									    <input type="password" class="form-control" name="new_password" id="new_password" placeholder="Enter New Password">
									    <span class="text-danger">
										<!-- validation part will be here -->
										</span>
									</div>

									<div class="form-group">
									    <label for="confirm_password">Confirm Password</label>
									    <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Enter confirm Password">
									    <span class="text-danger">
										<!-- validation part will be here -->
										</span>
									</div>

									<div class="form-check text-center">
									  <button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</form>


					  		
					  	</div>
					  </div>
					</div>
        </section>
    </article>
<?php
    require('inc/footer.php');
    
?>
