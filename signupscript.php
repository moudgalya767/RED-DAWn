<?php
    require 'common.php';
    
    $name = mysqli_real_escape_string($con,$_POST['name']);
    $username = mysqli_real_escape_string($con,$_POST['uname']);
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['pwd']);
    $retype_password = mysqli_real_escape_string($con,$_POST['rpwd']);
    
    $query = "select password from users where email = '$email'";
    
    $res = mysqli_query($con,$query) or die(mysqli_error($con));
    
    $rowcount = mysqli_num_rows($res);
    if($rowcount > 0) {
        echo json_encode(['error'=> 'User already exists !']);
	exit();
    }
    
    $query = "select username from users WHERE username = '$username'";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
    $rowcount = mysqli_num_rows($res);
    if($rowcount > 0) {
        echo json_encode(['error'=> 'Username not available']);
	exit();
    }
    if(strlen($password) < 6) {
        echo json_encode(['error'=> 'weak password']);
	exit();
    }
    if($password != $retype_password) {
        echo json_encode(['error'=> ' password do not match']);
	exit();
    }
    
    $password = md5($password);
    $query = "insert into users (name, username, email, password) values ('$name', '$username', '$email', '$password')";
    $res = mysqli_query($con, $query) or die(mysqli_error($con));
        

    $_SESSION['user'] = $username;
    echo json_encode(['location'=>'/redDawn/products.php']);
?>
