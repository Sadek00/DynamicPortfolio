
<?php 
    session_start();
    require_once '../database.php';
    $id=$_SESSION['id'];

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = ysqli_real_escape_string($db,$_POST['title']);
            $category = $_POST['category'];
            $description=mysqli_real_escape_string($db,$_POST['description']);

            // Thumbnail image Validation Start Here.
            $thumbnail = $_FILES['thumbnail'];
            $exp=explode('.', $thumbnail['name']);
            $extention= end($exp);
            $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

            if(in_array($extention, $allowType)){

              if($thumbnail['size'] <= 100000 )
              {
                $newFileName = $id.".".$extention;
                $newLocation = "uploads/portfolio/thumbnail/".$newFileName;
                move_uploaded_file($thumbnail['tmp_name'], $newLocation);

                // Header logo Insert Here
                $featured_image = $_FILES['featured_image'];
                $logoExp=explode('.',$headerLogo['name']);
                $logoExten = end($logoExp);
                $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

                if(in_array($logoExten, $allowType))
                {
                  if($headerLogo['size'] < 2000000)
                  {
                    $newfileName2 = $id.'.'.$logoExten;
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

                    if ($end=='portfolio-edit.php?id='.$edit_id) 
                    {
                      $update = "UPDATE portfolios  SET title='$title', category='$category', thumbnail='$newFileName', description='$description' WHERE id=$edit_id";

                      if(mysqli_query($db, $update)){
                      $_SESSION['message']= "Setting Content Add Successfully";
                      header('location:settings.php');
                      }else{
                      echo "Something Erorr ";
                      }
                    }
                    else
                    {
                          $insert = "INSERT into portfolios (title, category, thumbnail,description) VALUES ('$title', '$category', '$newFileName', '$description')";

                           if(mysqli_query($db, $insert)){
                            $_SESSION['message']= "Setting Content Add Successfully";
                            header('location:settings.php');
                          }else{
                            echo "Something Erorr ";
                          }
                  }

          }

?>