      <?php
					session_start();
					require_once'../database.php';
					$id=$_GET['user_iq'];
					$update_status="UPDATE user_form SET status=2 WHERE id=$id";
					$update=mysqli_query($db,$update_status);

					if ($update) {
						$_SESSION['Delete'] = 'Delete Succesfully ';
						header('location:user.php');
					}  
          ?>