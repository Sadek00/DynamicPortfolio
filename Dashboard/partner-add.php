<?php 
  require('inc/header.php');
 ?>

    <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
            <a class="breadcrumb-item" href="partner.php">Partners</a>
            <span class="breadcrumb-item active">Partners-Add</span>
          </nav>

          <div class="sl-pagebody">
            <div class="sl-page-title">
              <h2 class="table-header text-center ">Add Partners's Logo</h2>
            </div><!-- sl-page-title -->
        <form action="partner-post.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
          <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="" placeholder="Enter Name" required>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Logo: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="logo" required>
                </div> 
              </div><!-- col-6 -->
            </div><!-- row -->

            <div class="form-layout-footer">
              <button class="btn btn-info mg-r-5">Submit</button>
              <button class="btn btn-secondary">Cancel</button>
            </div><!-- form-layout-footer -->
          </div><!-- form-layout -->
        </div><!-- card -->
      </form>

<?php 
  require('inc/footer.php');
 ?>