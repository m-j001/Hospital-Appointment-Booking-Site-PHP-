<?php

include("connection.php");
session_start();

$email = $_POST['email'];
$pas = $_POST['password'];

$select = "SELECT * FROM `doctors` WHERE email = '$email' LIMIT 1";
   $result = mysqli_query($conn, $select);

    if(mysqli_num_rows($result) > 0){

        $user = mysqli_fetch_assoc($result);
        
        $password = $user['password'];
        if (password_verify($pas, $password)) 
        {
            $_SESSION['user'] = $user['email'];
            $_SESSION['firstname'] = $user['firstname'];
            echo "login successful!";
           header(header: "location: ../dashboarddoc.php");
   
         } 
         else{
            echo "incorrect email or password!";
        
         }

    }



?>