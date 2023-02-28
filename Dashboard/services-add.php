<?php 
  require('inc/header.php');
 ?>

    <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="user.php">Starlight</a>
            <a class="breadcrumb-item" href="services.php">Services</a>
            <span class="breadcrumb-item active">Services-Add</span>
          </nav>

          <div class="sl-pagebody">
            <div class="sl-page-title">
              <h2 class="table-header text-center ">Add Services Dynamically</h2>
            </div><!-- sl-page-title -->
        <form action="services-post.php" method="POST">
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
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Icon: <span class="tx-danger">*</span></label>
                  <select name="icon" class="form-control select2" data-placeholder="Select an icon">
                    <option label="Select Icon"></option>
                    <option value="fab fa-react">Creative Design</option>
                    <option value="fas fa-pen-nib">Graphic</option>
                    <option value="fas fa-magic">Magic Icon</option>
                    <option value="fas fa-desktop">Desktop Icon</option>
                    <option value="fas fa-sitemap">Network Icon</option>
                    <option value="fas fa-bullseye">Focus Icon</option>
                    <option value="fas fa-lightbulb"> Light Icon</option>
                  </select>
                </div> 
              </div><!-- col-4 -->
            </div><!-- row -->
              <div class="col-lg-10">
                <div class="form-group">
                  <label class="form-control-label">Summary: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="summary" value="" placeholder="Enter Summary"></textarea>
                </div>
              </div><!-- col-4 -->

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