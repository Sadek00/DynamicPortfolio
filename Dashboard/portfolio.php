<?php 

    include('inc/header.php');
    $select="SELECT * FROM portfolios WHERE status='1'";
    $query_user =mysqli_query($db,$select);
?>

  <link rel="stylesheet" type="text/css" href="assets/css/starlight.css">
   <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">Portfolio</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <div class="table bg-light rounded p-4">
            <div class="table-header text-center ">
               <h2>All Portfolios</h2>
               <br>
              <div class="text-center"><a href="portfolio-add.php" style="background-image: linear-gradient(45deg,cyan,blue);
                color: white;
                padding: 10px 20px;
                border-radius: 2px;
                font-weight: bold;"><i class="fa fa-plus"></i>Add</a></div> 
              </div>
               </br>
                <?php
                      if (isset($_SESSION['Delete'])) {?>
                        <div class="alert alert-danger">
                          <span>
                            <?php
                        echo $_SESSION['Delete'];
                        unset($_SESSION['Delete']); 
                        ?>                             
                      </span>
                        </div>
                      <?php }
                      ?>

                      <?php

                      if (isset($_SESSION['Update'])) {?>
                        <div class="alert alert-success">
                          <span>
                            <?php
                        echo $_SESSION['Update'];
                        unset($_SESSION['Update']);
                        ?>
                          </span>
                        </div>
                 <?php }       
                      
                ?>


           <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Category</th>
                  <th>Title</th>
                  <th>Thumbnail</th>
                  <th>Featured</th>
                  <th>Description</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($query_user as $KEY=>$value) { ?>
                  <tr>
                  <td><?= ++$KEY ?></td>
                  <td><?= $value['category']?></td>
                  <td><?= $value['title']?></td>
                  <td> <img style="border-radius: 15px;" width="60" src="uploads/portfolio/thumbnail/<?=$value['thumbnail']?>"> </td>
                  <td> <img style="border-radius: 15px;" width="100" src="uploads/portfolio/featureImage/<?=$value['featured_image']?>"> </td>
                  <td><?= $value['description']?></td>
                  <td>
                    <a href="user_edit.php?user_id=<?= $value['id']?>" class="btn btn-primary">Edit</a>
                    <button data-id="<?= $value['id']?>" class="btn btn-danger UserDelete ">Delete</button>
                  </td>
                </tr>
                <?php }
                ?>
                   
              </tbody>
            </table>

          </div>
        </div> 
        <!-- Delete Button Sweet alert javascript -->
        <script type="text/javascript">
      $('.UserDelete').click(function(){
        let  id=$(this).attr("data-id");

        // Sweet Alert
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
              setTimeout(function () {
               window.location.href='portfolio-delete.php?id='+id; //redirect DELETE page
             }, 5000);
              
              }else{
        swal("Your Data is safe!");
              }
              });
        

      })
      
    </script>   
        </div><!-- sl-page-title -->
      </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->

     
  <?php
    require('inc/footer.php');
	?>

  