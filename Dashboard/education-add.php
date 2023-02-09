<?php 
  require('inc/header.php');
 ?>

    <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="user.php">Starlight</a>
            <a class="breadcrumb-item" href="education.php">Education</a>
            <span class="breadcrumb-item active">Education-Add</span>
          </nav>

          <div class="sl-pagebody">
            <div class="sl-page-title">
              <h2 class="table-header text-center ">Add Education Part Dynamically</h2>
            </div><!-- sl-page-title -->

              <form action="education-post.php" method="POST" data-parsley-validate>
                <div class="card pd-20 pd-sm-40">
                <div class="form-layout">
                  <div class="row mg-b-25">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="text" name="title" placeholder="Enter Title" required>
                      </div>
                    </div><!-- col-4 -->
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label">Passing Year: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="passing_year" value="" placeholder="Enter Passing Year" required>
                      </div>
                    </div><!-- col-4 -->
                    
                    <div class="col-lg-4">
                      <div class="form-group mg-b-10-force">
                        <label class="form-control-label">Progress: <span class="tx-danger">*</span></label>
                        <input class="form-control" type="number" name="progress" value="" placeholder="Enter Progress" required>
                      </div>
                    </div><!-- col-4 -->
                  </div><!-- row -->

                  <div class="form-layout-footer">
                    <button class="btn btn-info mg-r-5">Submit Form</button>
                    <button class="btn btn-secondary">Cancel</button>
                  </div><!-- form-layout-footer -->
                </div><!-- form-layout -->
              </div><!-- card -->
            </form>

<?php 
  require('inc/footer.php');
 ?>