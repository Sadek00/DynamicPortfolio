


<?php
    require('inc/header.php');
    require_once"../database.php";
    $id=$_GET['user_iq'];
		$select="SELECT * FROM user_form WHERE id=$id";
		$query=mysqli_query($db,$select);
		$assoc=mysqli_fetch_assoc($query);
		$_SESSION['user_iq']=$id;
?>

      <article class="content error-404-page">
           
         <section class="section">
					 <div class="container">
					  <div class="row">
					  	<div class="col-7 m-auto">

					  		<h2 class="text-center text-success">Update Form</h2>
							  	<form action="user_update.php" method="POST"> <!-- Connection Of user_update page -->
							  		<!-- <input type="hidden" name="bd" value="<?=$assoc['id']?>"> evabeo id dhora jay -->
							  		<div class="form-group">
									    <label for="exampleInputName1">Name</label>
									    <input type="text" class="form-control" value="<?=$assoc['name']?>" name="name" id="exampleInputName1" aria-describedby="emailHelp" placeholder="Enter Name">
										<span class="text-danger">
										
										</span>
									</div>

									<div class="form-group">
									    <label for="exampleInputEmail1">Email address</label>
									    <input type="email" class="form-control" value="<?=$assoc['email']?>" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
									    <span class="text-danger">
										
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
