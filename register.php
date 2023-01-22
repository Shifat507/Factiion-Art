<?php
	
	// Don't Forgate to start Your Session.

	session_start();

	$name = $_POST['fullName']; // We have to give excetly the same name in POST array as we give in our profile.
	$email = $_POST['email'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];


	// Now Let's Connect To Your Database .

	$host_name = 'localhost'; // It Will Be same for you.
	$user_name = 'root'; // It Will Be same too.
	$password = '';// It will be same too.
	$database = 'wwe';// This might be different for you, you should name it as database.

	// Now connection.

	$connect = mysqli_connect($host_name,$user_name,$password,$database);

	// check if we database exist.

	if($connect == false) {
		echo "Server Error";
	}else {
		// insert data to your table.
		// Query .
		$sql = "insert into `user`(`name`,`email`,`address`,`gender`) values('$name','$email','$address','$gender')";
		// run Query.
		$result = mysqli_query($connect,$sql);
	}
	// if you want go to any location then .

	header("location:profile.html");

?>