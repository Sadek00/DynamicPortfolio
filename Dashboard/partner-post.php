
<?php 
    session_start();
    require_once '../database.php';

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = mysqli_real_escape_string($db,$_POST['name']);
            $last_id=mysqli_insert_id($db);

            // Insert into database
             $insert = "INSERT into partner (name) VALUES ('$name')";
             $query = mysqli_query($db, $insert);

            // Logo image Validation Start Here.
            $logo = $_FILES['logo'];
            $exp=explode('.', $logo['name']);
            $extention= end($exp);
            $allowType = array( 'jpeg', 'jpg', 'png', 'webp', 'JPEG', 'JPG', 'PNG');

            if(in_array($extention, $allowType)){

              if($logo['size'] <= 100000 )
              {
                $logoName = $last_id.".".$extention;
                $newLocation = "uploads/partners/".$logoName;
                move_uploaded_file($logo['tmp_name'], $newLocation);

                // Insert the Logo into database
                $update = "UPDATE partner SET logo='$logoName'";
                if(mysqli_query($db, $update)){
                      $_SESSION['update']= "Setting Content Add Successfully";
                      header('location:partner.php');
                      }else{
                      echo "Something Erorr ";
                      }

                   }else{
                    echo "Image size Should be less than 2MB";
                    }
              }
          }


?>