<?php
    session_start();
    require_once('database.php');

    $selectSetting = "SELECT * FROM setting";
    $settingQuery = mysqli_query($db, $selectSetting);
    $settingAssoc = mysqli_fetch_assoc($settingQuery);

?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $settingAssoc['websiteTitle'] ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="Dashboard/uploads/settings/favicon/<?php echo $settingAssoc['favIcon'] ?>">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/default.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="theme-bg">

    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_one"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_three"></div>
            </div>
        </div>
    </div>
    <!-- preloader-end -->
    <!-- header-start -->
    <header>
        <div id="header-sticky" class="transparent-header">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="main-menu">
                            <nav class="navbar navbar-expand-lg">
                                <a target="_blank" href="Dashboard/user.php" class="navbar-brand logo-sticky-none"><img src="Dashboard/uploads/settings/logo/<?php echo $settingAssoc['headerLogo'] ?>" alt="Logo"></a>
                                <a target="_blank" href="Dashboard/user.php" class="navbar-brand s-logo-none"><img src="Dashboard/uploads/settings/logo/<?php echo $settingAssoc['headerLogo'] ?>" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                    <span class="navbar-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active"><a class="nav-link" href="#home">Home</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#about">about</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#service">service</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#portfolio">portfolio</a></li>
                                        <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="header-btn">
                                    <a href="#" class="off-canvas-menu menu-tigger"><i class="flaticon-menu"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- offcanvas-start -->
        <div class="extra-info">
            <div class="close-icon menu-close">
                <button>
                    <i class="far fa-window-close"></i>
                </button>
            </div>
            <div class="logo-side mb-30">
                <a href="index-2.html">
                    <img src="assets/img/logo/logo.png" alt="" />
                </a>
            </div>
            <div class="side-info mb-30">
                <div class="contact-list mb-30">
                    <h4>Office Address</h4>
                    <p><?php echo $settingAssoc['office_adress'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Phone Number</h4>
                    <p><?php echo $settingAssoc['phone'] ?></p>
                </div>
                <div class="contact-list mb-30">
                    <h4>Email Address</h4>
                    <p><?php echo $settingAssoc['email'] ?></p>
                </div>
            </div>
            <div class="social-icon-right mt-20">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="offcanvas-overly"></div>
        <!-- offcanvas-end -->
    </header>
    <!-- header-end -->

    <!-- main-area -->
    <main>       

        <!-- banner-area -->
        <?php
        $select = " SELECT * FROM banner";
        $query = mysqli_query($db, $select);
        $assoc = mysqli_fetch_assoc($query);
        ?>
        <section id="home" class="banner-area banner-bg fix">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-6">
                        <div class="banner-content">
                            <h6 class="wow fadeInUp" data-wow-delay="0.2s">Hello!</h6>
                            <h2 class="wow fadeInUp" data-wow-delay="0.4s"><?php echo"I'M ".$assoc['name'] ?></h2>
                            <p class="wow fadeInUp" data-wow-delay="0.6s"><?php echo $settingAssoc['tagline'] ?></p>
                            <div class="banner-social wow fadeInUp" data-wow-delay="0.8s">
                                <?php
                                $select = " SELECT * FROM socials WHERE status = 'active'";
                                $query = mysqli_query($db, $select);
                                ?>
                                <ul>
                                    <?php foreach ($query as $icon) : ?>
                                        <li><a target="_blank" href="<?php echo $icon['link'] ?>"><i class="<?php echo $icon['icon'] ?>"></i></a></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <a href="#" class="btn wow fadeInUp" data-wow-delay="1s">SEE PORTFOLIOS</a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 d-none d-lg-block">
                        <div class="banner-img text-right">
                            <img src="Dashboard/uploads/banner/banner_photo/<?php echo $assoc['banner_photo'] ?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-shape"><img src="assets/img/shape/dot_circle.png" class="rotateme" alt="img"></div>
        </section>
        <!-- banner-area-end -->

        <!-- about-area-->
        <section id="about" class="about-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="Dashboard/uploads/banner/about_photo/<?php echo $assoc['about_photo'] ?>" title="me-01" alt="me-01">
                        </div>
                    </div>
                    <div class="col-lg-6 pr-90">
                        <div class="section-title mb-25">
                            <span>Introduction</span>
                            <h2>About Me</h2>
                        </div>
                        <div class="about-content">
                            <p><?php echo $settingAssoc['about'] ?></p>
                            <h3>Education:</h3>
                        </div>
                        <!-- Education Item -->
                        <?php
                        $selectData = "SELECT * FROM education WHERE status = 1 ORDER BY passing_year DESC ";
                        $query = mysqli_query($db, $selectData);
                        ?>
                        <?php foreach ($query as $key => $education) : ?>
                            <div class="education">
                                <div class="year"><?php echo $education['passing_year'] ?></div>
                                <div class="line"></div>
                                <div class="location">
                                    <span><?php echo $education['title'] ?></span>
                                    <div class="progressWrapper">
                                        <div class="progress">
                                            <div class="progress-bar wow slideInLefts" data-wow-delay="0.2s" data-wow-duration="2s" role="progressbar" style="width: <?=$education['progress']?>%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- End Education Item -->
                    </div>
                </div>
            </div>
        </section>
        <!-- about-area-end -->
        <?php
        $select_services = "SELECT * FROM services WHERE status = 'active' ";
        $services_query = mysqli_query($db, $select_services);
        ?>

        <!-- Services-area -->
        <section id="service" class="services-area pt-120 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>WHAT WE DO</span>
                            <h2>Services and Solutions</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php foreach ($services_query as $key => $service) : ?>
                        <div class="col-lg-4 col-md-6">
                            <div class="icon_box_01 wow fadeInLeft" data-wow-delay="0.2s">
                                <!-- Servicee Icon Here -->
                                <i class="<?php echo $service['icon'] ?>"></i>
                                <h3><?php echo $service['name'] ?></h3>
                                <p>
                                    <?php echo $service['summary'] ?> </p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- Services-area-end -->

        <!-- Portfolios-area -->
        <section id="portfolio" class="portfolio-area primary-bg pt-120 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="section-title text-center mb-70">
                            <span>Portfolio Showcase</span>
                            <h2>My Recent Best Works</h2>
                        </div>
                    </div>
                </div>
                <?php
                $portfolios = "SELECT * FROM portfolios WHERE status = 1 ";
                $portfoliosQuery = mysqli_query($db, $portfolios);
                ?>
                <div class="row">
                    <?php foreach ($portfoliosQuery as $portfolio) : ?>

                        <div class="col-lg-4 col-md-6 pitem">
                            <div class="speaker-box">
                                <div class="speaker-thumb">
                                    <img src="Dashboard/uploads/portfolio/thumbnail/<?php echo $portfolio['thumbnail'] ?>" alt="img">
                                </div>
                                <div class="speaker-overlay">
                                    <span><?php echo $portfolio['category'] ?></span>
                                    <h4><a href="portfolio-single.php?id=<?php echo $portfolio['id']?>"><?php echo $portfolio['title'] ?></a></h4>
                                    <a href="portfolio-single.php?id=<?php echo $portfolio['id']?>" class="arrow-btn">More information <span></span></a>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
        </section>
        <!-- services-area-end -->

        <?php

        $selectData = " SELECT * FROM partner WHERE status = 1";
        $dataQuery = mysqli_query($db, $selectData);

        ?>

        <!-- brand-area -->
        <div class="barnd-area pt-100 pb-100">
            <div class="container">
                <div  class="section-title text-center"><span>our partners</span></div>
                <div class="row brand-active">
                    <?php foreach ($dataQuery as $partners) : ?>
                        <div class="col-xl-2">
                            <div class="single-brand">
                                <img src="Dashboard/uploads/partners/<?php echo $partners['logo'] ?>" alt="img">
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- contact-area -->
        <section id="contact" class="contact-area primary-bg pt-120 pb-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-20">
                            <span>information</span>
                            <h2>Contact Information</h2>
                        </div>
                        
                        <div class="contact-content">
                            <h5>OFFICE IN <span>BANGLADESH</span></h5>
                            <div class="contact-list">
                                <ul>
                                    <li><i class="fas fa-map-marker"></i><span>Address :</span><?php echo $settingAssoc['office_adress'] ?></li>
                                    <li><i class="fas fa-headphones"></i><span>Phone :</span><?php echo $settingAssoc['phone'] ?></li>
                                    <li><i class="fas fa-globe-asia"></i><span>e-mail :</span><?php echo $settingAssoc['email'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-form">
                            <form action="contact-post.php" method="POST">
                                <input class="form-control name-border" type="text" name="name" placeholder="your name *">
                                
                                <input class="form-control email-border" type="email" name="email" placeholder="your email *">
                                
                                <textarea class="form-control text-border" name="message" id="message" placeholder="your message *"></textarea>
                                <button type="submit" class="btn">SEND</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12">
                        <div class="copyright-text text-center">
                            <p>Copyright© <span><?php echo $settingAssoc['footerText']?></span> | All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->





    <!-- JS here -->
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/one-page-nav-min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/ajax-form.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/jquery.waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/jquery.scrollUp.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>
</body>

<!-- Mirrored from themebeyond.com/html/kufa/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Feb 2020 06:28:17 GMT -->

</html>