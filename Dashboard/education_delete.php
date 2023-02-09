   <?php
					session_start();
					require_once'../database.php';
					$id=$_GET['id'];
					$update_status="UPDATE education SET status=2 WHERE id=$id";
					$update=mysqli_query($db,$update_status);

					if ($update) {
						$_SESSION['Delete'] = 'Delete Succesfully ';
						header('location:education.php');
					}  
          ?>