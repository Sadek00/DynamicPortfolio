<?php
include 'inc/header.php';
require_once '../database.php';

$selectData = "SELECT * FROM setting";
$dataQuery = mysqli_query($db, $selectData);
$dataAssoc = mysqli_fetch_assoc($dataQuery);

$selectSetting = "SELECT COUNT(*) as total FROM setting";
$settingQuery = mysqli_query($db, $selectSetting);
$settingAssoc = mysqli_fetch_assoc($settingQuery);
?>

<!-- ########## START: MAIN PANEL ########## -->
<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="dashboard.php">Dashboard</a>
        <span class="breadcrumb-item active">Setting</span>
    </nav>
    <div class="sl-pagebody">
        <div class="sl-page-title">
            <div class="row">
                <div class="col-12 m-auto">
                    <div class="table bg-light rounded p-4">
                        <div class="table-header text-center">
                            <h2>Website Setting</h2>
                            <?php if ($settingAssoc['total'] > 0) : ?>
                              <div class="text-right"><a href="settings-edit.php?id=<?= $dataAssoc['id']?>" style="background-image: linear-gradient(45deg,cyan,blue);
                                color: white;
                                padding: 10px 20px;
                                border-radius: 2px;
                                font-weight: bold;"><i class="fa fa-plus"></i>Edit Content</a></div> 
                            <?php else : ?>
                                <div class="text-right"><a href="settings-add.php" style="background-image: linear-gradient(45deg,cyan,blue);
                                color: white;
                                padding: 10px 20px;
                                border-radius: 2px;
                                font-weight: bold;"><i class="fa fa-plus"></i>Add Content</a></div>
                            <?php endif; ?>
                              </div>
                        </div>
                        <div class="message">
                            <?php if (isset($_SESSION['message'])) : ?>
                                <div class="alert alert-success alert-dismissible" role="alert">
                                    <button class="close" data-dismiss="alert">&times;</button>
                                    <strong><?= $_SESSION['message']; ?></strong>
                                </div>
                            <?php
                                unset($_SESSION['message']);
                            endif; ?>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Websit Title</th>
                                    <th>Header Logo</th>
                                    <th>Fav Icon</th>
                                    <th>Copyright Text</th>
                                    <th>Tagline</th>
                                    <th>About</th>
                                    <th>Ofiice Adress</th>
                                    <th>Email</th>
                                    <th>Phone</th>                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><?php echo $dataAssoc['websiteTitle']; ?></td>
                                    <td>
                                        <?php if ($settingAssoc['total'] > 0) : ?>
                                            <img src="uploads/settings/logo/<?php echo $dataAssoc['headerLogo']; ?>" alt="Logo">
                                        <?php else : ?>
                                            <p>N/A</p>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if ($settingAssoc['total'] > 0) : ?>
                                            <img src="uploads/settings/favicon/<?php echo $dataAssoc['favIcon']; ?>" alt="favicon">
                                        <?php else : ?>
                                            <p>N/A</p>
                                        <?php endif; ?>
                                    </td>
                                    <td><?php echo $dataAssoc['footerText']; ?></td>
                                    <td><?php echo $dataAssoc['tagline']; ?></td>
                                    <td><?php echo $dataAssoc['about']; ?></td>
                                    <td><?php echo $dataAssoc['office_adress']; ?></td>
                                    <td><?php echo $dataAssoc['email']; ?></td>
                                    <td><?php echo $dataAssoc['phone']; ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div><!-- sl-pagebody -->
</div><!-- sl-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
<?php include('inc/footer.php') ?>