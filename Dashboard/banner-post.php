
<?php 
    session_start();
    require_once '../database.php';

          if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $last_id=$_SESSION['id'];

            // Banner image Validation Start Here.
            $banner = $_FILES['banner_photo'];
            $exp=explode('.', $banner['name']);
            $extention= end($exp);
            $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

            if(in_array($extention, $allowType)){

              if($banner['size'] <= 5000000 )
              {
                $bannerName = $last_id.".".$extention;
                $newLocation = "uploads/banner/banner_photo/".$bannerName;
                move_uploaded_file($banner['tmp_name'], $newLocation);

                 // Insert into database
             $insert = "INSERT into banner (banner_photo) VALUES ('$bannerName')";
             $query = mysqli_query($db, $insert);

              }else{
                    echo "Image size Should be less than 5MB";
                    }
            }else{
                    echo "PLEASE INSERT AN IMAGE FILE";
                    }

            // Logo image Validation Start Here.
            $about = $_FILES['about_photo'];
            $exp=explode('.', $about['name']);
            $ext= end($exp);

            if(in_array($ext, $allowType)){

              if($about['size'] <= 5000000 )
              {
                $aboutName = $last_id.".".$ext;
                $newLocation2 = "uploads/banner/about_photo/".$aboutName;
                move_uploaded_file($about['tmp_name'], $newLocation2);

                // Insert into database
                   $update = "UPDATE banner SET about_photo='$aboutName'";
                      if(mysqli_query($db, $update)){
                            $_SESSION['update']= "Setting Content Add Successfully";
                            header('location:banner.php');
                            }else{
                            echo "Something Erorr ";
                            }

                         }else{
                          echo "Image size Should be less than 2MB";
                          }
              }
          }


?>