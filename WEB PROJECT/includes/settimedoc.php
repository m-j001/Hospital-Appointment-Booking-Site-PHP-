
<?php
include("connection.php");
session_start();



if(isset($_POST['settime'])){

    $id = $_POST['id'];
    $status = $_POST['time'];
    $statusn = "pending";

    $select = "SELECT * FROM appointments WHERE id=$id && status != '$statusn' ";

    $result = mysqli_query($conn, $select);
 
    if(mysqli_num_rows($result) == 1){
 
     echo "The Meeting Time Has Already Been Set By You, Kindly Check On The Status.";
 
    }elseif(mysqli_num_rows($result) == 0){

        $query = "UPDATE appointments SET status='$status' WHERE id=$id && status = '$statusn' ";
        $runquery = mysqli_query($conn, $query);
        if ($runquery) 
        {
          
        echo '<script> alert("Time Set Successfully"); </script>';
            
           header(header: "location: ../myappointmentsdoc.php");
    
         } 
         else{
            echo '<script> alert("Time Set not Successfull"); </script>';
        
         }
    
     }
    }


  





?>