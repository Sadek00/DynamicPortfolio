<?php
    require('inc/header.php');
?>

  <article class="content error-404-page">
                    <div class="title-block">
                        <h3 class="title"> Dashboard </h3>
                    </div>
                    <section class="section">
                        <div class="error-card">
                            <div class="error-title-block">
                                <h2 >  Welcome To Dashboard</h2>
                            </div>
                            <div class="error-container">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="input-group">
                                            <input type="text" 
                                            class="form-control">
                                            <span class="input-group-btn">
                                                <button class="btn btn-primary" type="button">Search</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <a class="btn btn-primary" href="users.php">
                                    <i class="fa fa-angle-left"></i> See all the registerd user</a>
                            </div>
                        </div>
                    </section>
                </article>
<?php
    require('inc/footer.php');
?>
