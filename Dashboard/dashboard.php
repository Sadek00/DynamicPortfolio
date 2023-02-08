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

          <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Email Validation</h6>
          <p class="mg-b-20 mg-sm-b-30">A demo of an email field that is required and must also be a valid email address.<br>It automatically validate an email when the field is in type="email".</p>

          <form action="#" data-parsley-validate>
            <div class="d-sm-flex wd-sm-300">
              <div class="form-group mg-b-0">
                <label>Email: <span class="tx-danger">*</span></label>
                <input type="email" name="email" class="form-control wd-200 wd-xs-250" placeholder="Enter email" required>
              </div><!-- form-group -->
              <div class="mg-sm-l-10 mg-t-10 mg-sm-t-25 pd-t-4">
                <button type="submit" class="btn btn-info pd-x-15">Validate Email</button>
              </div>
            </div>
          </form>
        </div><!-- card -->

<?php 
  require('inc/footer.php');
 ?>