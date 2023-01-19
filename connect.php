<?php
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    //database connection
    $conn = new mysqli('localhost','root','','faction_art',);
    if($conn->connect_error){
        die('Connection Failed : ' .$conn->connection_error);
    }else{
        $stmt = $conn->prepare("Insert into registration(fullName, email, address, gender)values(?,?,?,?)");
        $stmt->bind_param("ssss",$fullName, $email, $address, $email);
        $stmt->execute();
        echo "registration Succefully..."
        $stmt->close();  
        $conn->close();  
    }
?>