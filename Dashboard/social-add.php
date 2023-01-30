<?php 
  require('inc/header.php');
 ?>

    <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="user.php">Starlight</a>
            <a class="breadcrumb-item" href="social.php">Socials</a>
            <span class="breadcrumb-item active">Social-Add</span>
          </nav>

          <div class="sl-pagebody">
            <div class="sl-page-title">
              <h2 class="table-header text-center ">Add Social Dynamically</h2>
            </div><!-- sl-page-title -->
        <form action="social-update.php" method="POST">
          <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Name: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="name" value="" placeholder="Enter name">
                </div>
              </div><!-- col-4 -->
              <div class="col-lg-4">
                <div class="form-group">
                  <label class="form-control-label">Link: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="link" value="" placeholder="Enter link">
                </div>
              </div><!-- col-4 -->
              
              <div class="col-lg-4">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select name="icon" class="form-control select2" data-placeholder="Select an icon">
                    <option label="Select Icon"></option>
                    <option value="fab fa-facebook-f">Facebook</option>
                    <option value="fab fa-linkedin">LinkedIn</option>
                    <option value="fab fa-github">GitHub</option>
                    <option value="fab fa-twitter">Twitter</option>
                  </select>
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