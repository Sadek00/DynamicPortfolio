<?php 

    include('inc/header.php');
    $select="SELECT * FROM contacts";
    $query_user =mysqli_query($db,$select);
?>
        
   <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
        <span class="breadcrumb-item active">Messages</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <div class="table bg-light rounded p-4">
            <div class="table-header text-center ">
               <h2>All Messages</h2>
             </div>
               
           <div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th>Sl No</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Messages</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                foreach ($query_user as $KEY=>$value) { ?>
                  <tr <?php if ($value['status']==1): ?>
                    style="font-weight: bold;"
                  <?php endif ?>>
                  <td><?= ++$KEY ?></td>
                  <td><?= $value['name']?></td>
                  <td><?= $value['email']?></td>
                  <td><?= $value['message']?></td>
                  <td>
                    <?php if ($value['status']==1): ?>
                       <a href="message-status.php?user_id=<?= $value['id']?>" class="btn btn-primary">Read</a>
                       <?php else: ?> 
                        <a href="message-status.php?user_id=<?= $value['id']?>" class="btn btn-primary">Unread</a>
                    <?php endif ?>
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

  