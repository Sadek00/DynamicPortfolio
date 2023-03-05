<?php 

include('inc/header.php'); 
require_once 'inc/database.php';
// Total Number of User
$selectUser = "SELECT COUNT(*) as total FROM user_form WHERE status = 1";
$queryUser = mysqli_query($db, $selectUser);
$userAssoc = mysqli_fetch_assoc($queryUser);

// Total Number of Portfolios
$selectPortfolios = "SELECT COUNT(*) as total FROM portfolios WHERE status = 1";
$queryPortfolios = mysqli_query($db, $selectPortfolios);
$portfoliosAssoc = mysqli_fetch_assoc($queryPortfolios);

// Total Number of Services
$selectServices = "SELECT COUNT(*) as total FROM services WHERE status = 'active'";
$queryServices = mysqli_query($db, $selectServices);
$servicesAssoc = mysqli_fetch_assoc($queryServices);

// Total Number of Brand
$selectPartner = "SELECT COUNT(*) as total FROM partner WHERE status = 1";
$queryPartner = mysqli_query($db, $selectPartner);
$partnerAssoc = mysqli_fetch_assoc($queryPartner);


// Total Number of Education
$selectEducation = "SELECT COUNT(*) as total FROM education WHERE status = 1";
$queryEducation = mysqli_query($db, $selectEducation);
$educationAssoc = mysqli_fetch_assoc($queryEducation);

// Socail Media Link
$socialmedia = "SELECT COUNT(*) as total FROM socials WHERE status = 'active'";
$querySocialmedia = mysqli_query($db, $socialmedia);
$socialmediaAssoc = mysqli_fetch_assoc($querySocialmedia);


?>  


    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
        
        <span class="breadcrumb-item active">Home</span>
      </nav>

      <div class="sl-pagebody">
       
        <h4 class="text-center mb-3 text-uppercase">Hello <strong><?php echo $_SESSION['name']; ?></strong>, Welcome our admin panel.</h4>

        <div class="row row-sm">


          <div class="col-sm-6 col-xl-3">
            <div class="card pd-20 pd-sm-25">
              <div class="d-flex align-items-center">
               
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-gray-600 mg-b-8">Total Users</p>
                  <h3 class="tx-bold tx-lato tx-inverse mg-b-0"><?= $userAssoc['total']?></h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
            <div class="card pd-20 pd-sm-25 bg-primary">
              <div class="d-flex align-items-center">
                
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Total Portfolios</p>
                  <h3 class="tx-bold tx-lato tx-white mg-b-0"><?= $portfoliosAssoc['total']?></h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25 bg-info">
              <div class="d-flex align-items-center">
                
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Total Services</p>
                  <h3 class="tx-bold tx-lato tx-white mg-b-0"><?= $servicesAssoc['total']?></h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25 bg-sl-primary">
              <div class="d-flex align-items-center">
               
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Total Brands</p>
                  <h3 class="tx-bold tx-lato tx-white mg-b-0"><?= $partnerAssoc['total']?></h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->

        </div><!-- row -->

        <div class="row row-sm mg-t-20">

          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25 bg-info">
              <div class="d-flex align-items-center">
                
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Total Education</p>
                  <h3 class="tx-bold tx-lato tx-white mg-b-0"><?= $educationAssoc['total']?></h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->
          <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
            <div class="card pd-20 pd-sm-25 bg-sl-primary">
              <div class="d-flex align-items-center">
               
                <div class="mg-l-15">
                  <p class="tx-uppercase tx-11 tx-spacing-1 tx-medium tx-white-5 mg-b-8">Total Icon</p>
                  <h3 class="tx-bold tx-lato tx-white mg-b-0"><?= $socialmediaAssoc['total']?></h3>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-3 -->

          </div>
        </div><!-- sl-pagebody -->
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
<?php include('inc/footer.php') ?>
