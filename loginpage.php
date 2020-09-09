<?php
	require 'common.php';

	$email=mysqli_real_escape_string($con,$_POST['uname']);
	$password=mysqli_real_escape_string($con,$_POST['pwd']);
	$password=md5($password);

	$query="select password from users where username='$email'";

	$res=mysqli_query($con,$query) or die(mysqli_error($con));


	$row=mysqli_fetch_array($res);

	if(!mysqli_affected_rows($con)) {
		echo json_encode(['error'=> 'User not found ']);
		exit();
	}


	$db_password=$row['password'];

	if($password==$db_password){
		$_SESSION['email']=$email;
		echo json_encode(['location'=>'/redDawn/products.php']);
	}

	else
	{
		echo json_encode(['error'=>'Enter Correct Password']);

	}





	


?>
