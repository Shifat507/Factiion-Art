<?php
	
	$_name = $_POST['fullName'];
	$_email = $_POST['email'];
	$_pass = $_POST['password'];

	$con = mysqli_connect('localhost','root','','registration') or die("server error");

	$sql = "select *from `user_info` where `name` = '$_name' and `email` = '$_email' and `password` = '$_pass'";
	$result = mysqli_query($con,$sql);

	if(mysqli_num_rows($result) > 0) {
		//echo "login succesful";
		header('location:index.html');
	}else {
		 //echo "Wrong User name";
		header('location:login.html');
	}
	
?>