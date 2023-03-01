<?php 
    session_start();
    require_once 'database.php';

          if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message=mysqli_real_escape_string($db,$_POST['message']);

            $insert = "INSERT INTO contacts (name,email,message) VALUES ('$name','$email','$message')";
            $query = mysqli_query($db, $insert);
            header('location:index.php#contact');
    }
  ?>