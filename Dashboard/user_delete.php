 <script type="text/javascript" src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
   
        /*Sweet Alert*/
        swal({
              title:"Are you sure?",
              text:"Once deleted, you will not be able to recover this data!",
              icon:"warning",
              buttons:true,
              dangerMode:true,
              })
              .then((willDelete)=>{
              if(willDelete){
              swal("Your Data has been deleted!",{
              icon:"success",
              });
              <?php
					session_start();
					require_once'../database.php';
					$id=$_GET['user_iq'];
					$update_status="UPDATE user_form SET status=2 WHERE id=$id";
					$update=mysqli_query($db,$update_status);

					if ($update) {
						$_SESSION['Delete'] = 'Delete Succesfully ';
						header('location:user.php');
					}  ?>
              
              }else{
        swal("Your Data is safe!");
              }
              });
      
    </script>
