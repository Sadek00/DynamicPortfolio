<?php 
  require('inc/header.php');
 ?>

    <div class="sl-mainpanel">
          <nav class="breadcrumb sl-breadcrumb">
            <a class="breadcrumb-item" href="dashboard.php">Starlight</a>
            <a class="breadcrumb-item" href="portfolio.php">Portfolio</a>
            <span class="breadcrumb-item active">Portfolio-Add</span>
          </nav>

          <div class="sl-pagebody">
            <div class="sl-page-title">
              <h2 class="table-header text-center ">Add Portfolio's Dynamically</h2>
            </div><!-- sl-page-title -->
        <form action="portfolio-post.php" method="POST" enctype="multipart/form-data" data-parsley-validate>
          <div class="card pd-20 pd-sm-40">
          <div class="form-layout">
            <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Title: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="title" value="" placeholder="Enter Title" required>
                </div>
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="text" name="category" value="" placeholder="Enter Category" required>
                </div> 
              </div><!-- col-6 -->
            </div><!-- row -->
              <div class="row mg-b-25">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Thumbnail: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="thumbnail" required>
                </div> 
              </div><!-- col-6 -->
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Featured Image: <span class="tx-danger">*</span></label>
                  <input class="form-control" type="file" name="featured_image" required>
                </div> 
              </div><!-- col-6 -->
            </div><!-- row -->
              <div class="col-lg-10">
                <div class="form-group">
                  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                  <textarea class="form-control" type="text" name="description" placeholder="Enter Description"></textarea>
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