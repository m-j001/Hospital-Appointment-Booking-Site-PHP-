<?php


include("connection.php");
session_start();



    $specialty = $_POST['specialty'];
    $insurance = $_POST['insurance'];
    $hosnum = $_POST['hosnum'];
    $doctor = $_POST['doctor'];
    $email = $_SESSION['user'];
    $phonenum = $_SESSION['phonenum'];
    $status = "pending";
    
    $select = "SELECT * FROM appointments WHERE email = '$email' && doctor = '$doctor' && status = '$status' ";

    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) > 0){
 
     echo "Appointment with doctor already booked! Kindly wait for approval and meeting time.";
 
    }elseif (empty($specialty) || empty($insurance) || empty($hosnum) || empty($doctor) || empty($email) || empty($phonenum))
     {
     echo "You did not fill out all required fields.";
    
     } else

     {
    
    $sql = "INSERT INTO appointments(specialty, insurance, hosnum, doctor, email, phone_number, status) VALUES('$specialty', '$insurance', '$hosnum', '$doctor', '$email', '$phonenum', '$status')";


if ($conn->query($sql) === TRUE) {
  header('location:../myappointments.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

  $conn->close();










?>