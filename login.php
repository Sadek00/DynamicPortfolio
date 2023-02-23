<?php
    session_start();
    
?>
    <!-- vendor css -->
            <link href="Dashboard/assets/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
            <link href="Dashboard/assets/lib/Ionicons/css/ionicons.css" rel="stylesheet">


            <!-- Starlight CSS -->
            <link rel="stylesheet" href="Dashboard/assets/css/starlight.css">

        <form id="login-form" action="login-store.php" method="POST" data-parsley-validate>   

            <div class="d-flex align-items-center justify-content-center bg-sl-primary ht-100v">

              <div class="login-wrapper wd-300 wd-xs-350 pd-25 pd-xs-40 bg-white">
                <div class="signin-logo tx-center tx-24 tx-bold tx-inverse">starlight <span class="tx-info tx-normal">admin</span></div>
                <div class="tx-center mg-b-60">Professional Admin Template Design</div>

                <div class="form-group">
                  <input type="email" class="form-control" name="username" id="username" placeholder="Your email address" required>
                </div><!-- form-group -->
                <div class="form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Your password">
                <span class="text-danger">
                <?php

                if (isset($_SESSION['PasswordErr'])) {
                    echo $_SESSION['PasswordErr'];
                    unset($_SESSION['PasswordErr']);

                    }
                ?>
                </span>

                  <a href="" class="tx-info tx-12 d-block mg-t-10">Forgot password?</a>
                </div><!-- form-group -->
                <button type="submit" class="btn btn-info btn-block">Sign In</button>

                <div class="mg-t-60 tx-center">Not yet a member? <a href="signup.php" class="tx-info">Sign Up</a></div>
              </div><!-- login-wrapper -->
            </div><!-- d-flex -->
        </form>

        <script src="Dashboard/assets/lib/jquery/jquery.js"></script>
        <script src="Dashboard/assets/lib/popper.js/popper.js"></script>
        <script src="Dashboard/assets/lib/bootstrap/bootstrap.js"></script>

