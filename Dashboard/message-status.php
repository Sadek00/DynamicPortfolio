    <?php
					session_start();
					require_once'../database.php';

					$id=$_GET['user_id'];
					$select="SELECT * FROM contacts WHERE id=$id";
					$query=mysqli_query($db,$select);
					$assoc=mysqli_fetch_assoc($query);
					if ($assoc['status']==1) {
						$update_status="UPDATE contacts SET status=2 WHERE id=$id";
						if(mysqli_query($db,$update_status)){
							header('location:contact.php');
						}
					}
					else{
					$update_status="UPDATE contacts SET status=1 WHERE id=$id";
					if(mysqli_query($db,$update_status)){
							header('location:contact.php');
						}
					}
					
          ?>