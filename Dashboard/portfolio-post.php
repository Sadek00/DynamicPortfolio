
<?php 
    session_start();
    require_once '../database.php';

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $title = mysqli_real_escape_string($db,$_POST['title']);
            $category = $_POST['category'];
            $description=mysqli_real_escape_string($db,$_POST['description']);
            $last_id=rand();

            // Thumbnail image Validation Start Here.
            $thumbnail = $_FILES['thumbnail'];
            $exp=explode('.', $thumbnail['name']);
            $extention= end($exp);
            $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

            if(in_array($extention, $allowType)){

              if($thumbnail['size'] <= 100000 )
              {
                $newFileName = $last_id.".".$extention;
                $newLocation = "uploads/portfolio/thumbnail/".$newFileName;
                move_uploaded_file($thumbnail['tmp_name'], $newLocation);

                // Feature image Insert Here
                $featured_image = $_FILES['featured_image'];
                $logoExp=explode('.',$featured_image['name']);
                $logoExten = end($logoExp);
                $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

                if(in_array($logoExten, $allowType))
                {
                  if($featured_image['size'] < 2000000)
                  {
                    $newfileName2 = $last_id.'.'.$logoExten;
                    $newLocation2 = "uploads/portfolio/featureImage/".$newfileName2;
                    move_uploaded_file($featured_image['tmp_name'], $newLocation2);

                   }else{
                    echo "Image size Should be less than 2MB";
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
                      header('location:portfolio.php');
                      }else{
                      echo "Something Erorr ";
                      }
                    }
                    else
                    {
                          $insert = "INSERT into portfolios (title, category, thumbnail,description,featured_image) VALUES ('$title', '$category', '$newFileName', '$description','$newfileName2')";

                           if(mysqli_query($db, $insert)){
                            $_SESSION['message']= "Setting Content Add Successfully";
                            header('location:portfolio.php');
                          }else{
                            echo "Something Erorr ";
                          }
                  }

          }

?>