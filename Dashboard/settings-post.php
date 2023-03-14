
<?php 
    session_start();
    require_once '../database.php';
    $id=$_SESSION['id'];
    $rand = rand(1,100);

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $websiteTitle = $_POST['websiteTitle'];
            $footerText = $_POST['footerText'];
            $tagline= $_POST['tagline'];
            $officeAdress=$_POST['office_adress'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $about=mysqli_real_escape_string($db,$_POST['about']);

            // Website Title Validation.
            if(empty($websiteTitle)){
              $_SESSION['websiteTitle_error'] = "Please Write your Website title.";
              header('location: settings-add.php');
              die();
            }else{
              $validTitle = $websiteTitle;
            }

            // Website Title Validation.
            if(empty($footerText)){
              $_SESSION['footerText_error'] = "Please Write your Copyright text";
              header('location: settings-add.php');
              die();
            }else{
              $validText = $footerText;
            }

            // Media File Validation Start Here.
            $favIcon = $_FILES['favIcon'];
            $ext=explode('.', $favIcon['name']);
            $extention= end($ext);
            $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

            if(in_array($extention, $allowType)){

              if($favIcon['size'] <= 100000 )
              {
                $newFileName = $rand.".".$extention;
                $newLocation = "uploads/settings/favicon/".$newFileName;
                move_uploaded_file($favIcon['tmp_name'], $newLocation);

                // Header logo Insert Here
                $headerLogo = $_FILES['headerLogo'];
                $logoExp=explode('.',$headerLogo['name']);
                $logoExten = end($logoExp);
                $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

                if(in_array($logoExten, $allowType))
                {
                  if($headerLogo['size'] < 2000000)
                  {
                    $newfileName2 = $rand.'.'.$logoExten;
                    $newLocation2 = "uploads/settings/logo/".$newfileName2;
                    move_uploaded_file($headerLogo['tmp_name'], $newLocation2);

                   }else{
                    echo "Logo size Should be less than 2MB";
                    }
                }else{
                  $_SESSION['portfolioFeature_error']= 'This type of file not allow.';
                  header('location:settings-add.php');
                }

              }else{
                $_SESSION['portfolioThumbnail_error']= 'Image size maximum 2MB allow.';
                header('location:settings-add.php');
                }
            }else{
              $_SESSION['portfolioThumbnail_error']= 'Please insert an image file';
              header('location:settings-add.php');
            }
                    // Insert or Update in the Database
                    $edit_id=$_POST['id'];
                    $exp=explode('/',$_SERVER['HTTP_REFERER']);
                    $end=end($exp);

                    if ($end=='settings-edit.php?id='.$edit_id) 
                    {
                      $update = "UPDATE setting  SET websiteTitle='$validTitle', footerText='$validText', favIcon='$newFileName', headerLogo='$newfileName2', tagline='$tagline', office_adress='$officeAdress', about='$about', email='$email', phone='$phone' WHERE id=$edit_id";

                      if(mysqli_query($db, $update)){
                      $_SESSION['message']= "Setting Content Add Successfully";
                      header('location:settings.php');
                      }else{
                      echo "Something Erorr ";
                      }
                    }
                    else
                    {
                          $insert = "INSERT into setting (websiteTitle, footerText, favIcon, headerLogo, tagline, office_adress, about, email, phone) VALUES('$validTitle', '$validText', '$newFileName', '$newfileName2', '$tagline', '$officeAdress', '$about', '$email', '$phone')";

                           if(mysqli_query($db, $insert)){
                            $_SESSION['message']= "Setting Content Add Successfully";
                            header('location:settings.php');
                          }else{
                            echo "Something Erorr ";
                          }
                  }

          }

?>