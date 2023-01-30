<?php
	session_start();
	require_once'../database.php';
	$id=$_SESSION['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];

	//IMAGE VALIDATION
	$image_name=$_FILES['profile-image']['name'];
	$explode=(explode('.', $image_name));
	$chek_format=end($explode);
	$allow_format=['jpg','png','JPEG','jpeg','JPG'];

	//Validate image format & image size
	if (in_array($chek_format, $allow_format) && $_FILES['profile-image']['size']<5000000) {

		 $select="SELECT * FROM user_form WHERE id=$id";
		 $query =mysqli_query($db,$select);
		 $assoc=mysqli_fetch_assoc($query);
		 if ($assoc['profile_image']!='default.png') {
		 	unlink('uploads/'.$assoc['profile_image']);
		 }

		 $new_ext=$id.'.'.$chek_format;
		 $new_location='uploads/'.$new_ext;
		 move_uploaded_file($_FILES['profile-image']['tmp_name'], $new_location);

		 $edit="UPDATE user_form SET name='$name', email='$email', profile_image='$new_ext' WHERE id=$id";
		 $edit_user=mysqli_query($db,$edit);

		 if ($edit_user) {
			$_SESSION['name']=$name;
			$_SESSION['Update'] = 'Update Succesfully ';
			header('location: user.php');
		}
	}
	else{

		$_SESSION['formatErr'] = 'Please Upload an image file ';
			header('location: edit-profile.php');
	}

	

?>