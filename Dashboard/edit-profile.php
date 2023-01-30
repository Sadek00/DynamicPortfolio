
<?php
    require_once'inc/header.php';
    require_once"../database.php";
    	$id=$_SESSION['id'];
		$select="SELECT * FROM user_form WHERE id=$id";
		$query=mysqli_query($db,$select);
		$assoc=mysqli_fetch_assoc($query);
		
?>
           
         <section class="section">
					 <div class="container">
					  <div class="row">
					  	<div class="col-7 m-auto">

					  		<h2 class="text-center text-success">Update Form</h2>
							  	<form action="update-profile.php" method="POST" enctype="multipart/form-data"> <!-- Connection Of update page -->
							  	
							  		<div class="form-group">
									    <label for="exampleInputName1">Name</label>
									    <input type="text" class="form-control" value="<?=$assoc['name']?>" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter Name">
										<span class="text-danger">
										<!-- validation part will be here -->
										</span>
									</div>

									<div class="form-group">
									    <label for="exampleInputEmail1">Email address</label>
									    <input type="email" class="form-control" value="<?=$assoc['email']?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									    <span class="text-danger">
										<!-- validation part will be here -->
										</span>
									</div>

									<div class="form-group">
									    <label for="profile-image">Profile-image<span class="tx-danger">*</span></label>
									    <input type="file" class="form-control" name="profile-image" id="profile-image">
									    <span class="text-danger">
										
										<?php
											if (isset($_SESSION['formatErr'])) {
												echo $_SESSION['formatErr'];
												unset($_SESSION['formatErr']);

											}
										?>

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

<?php
    require('inc/footer.php');
    
?>
