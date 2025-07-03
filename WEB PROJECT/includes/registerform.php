<?php


include("connection.php");



    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
    $email = $_POST['email'];
    $pas = $_POST['password'];
    
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    
    $select = "SELECT * FROM patients WHERE email = '$email' || phone_number = '$phone' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

    echo "email or phone number already exist!";

   }elseif (empty($firstname) || empty($lastname) || empty($email) || empty($pas) || empty($address) || empty($phone))
    {
    echo "You did not fill out all required fields.";
   
    } else
    {
    $password = password_hash($pas, PASSWORD_DEFAULT);
    $sql = "INSERT INTO patients(firstname, lastname, email, password, address, phone_number) VALUES('$firstname', '$lastname', '$email', '$password', '$address', '$phone')";


if ($conn->query($sql) === TRUE) {
  header('location:../index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

  $conn->close();










?>