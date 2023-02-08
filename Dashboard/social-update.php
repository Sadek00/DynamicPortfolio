<?php
	session_start();
	require_once'../database.php';
	$name=$_POST['name'];
	$link=$_POST['link'];
	$icon=$_POST['icon'];

					// For social-edit.php actions
                    $edit_id=$_POST['id'];
                    $exp=explode('/',$_SERVER['HTTP_REFERER']);
                    $end=end($exp);

                    if ($end=='social_edit.php?id='.$edit_id) 
                    {
                      $update = "UPDATE socials  SET name='$name', link='$link', icon='$icon'WHERE id=$edit_id";

                      if(mysqli_query($db, $update)){
	                      $_SESSION['update']= "Insert Succesfully";
	                      header('location:social.php');
                      }else{
                      echo "Something Erorr ";
                      }
                    }
                    // For social-add.php actions
                    else
                    {
                          $insert="INSERT INTO socials(name,link,icon) VALUES('$name','$link','$icon')";

                           if(mysqli_query($db, $insert)){
	                            $_SESSION['update']= "Insert Succesfully";
	                            header('location:social.php');
                          }else{
                            echo "Something Erorr ";
                          }
                      }

?>