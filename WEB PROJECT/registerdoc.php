<?php

@include 'connection.php';


?>



<!DOCTYPE html>
<html>
<head>
  
    <title>BrownCadbuss Hospitals</title>
    <link rel="stylesheet" href="\WEB PROJECT\css\style.css">
  </head>

<body>
<div class="container">
<div class="nav">
<span class="logow">BrownCadbuss <br> Hospitals</span>
<img class="img0" src="\WEB PROJECT\images\pngegg.png">

  <li><a href="#home">Home</a></li>
  <li><a href="#home">Home</a></li>
  <li><a href="#about">About Us</a></li>
  <li><a href="#clients">Our Clients</a></li>  
  <li><a href="#contact">Contact Us</a></li>
</div>
<div class="nave">
  <li><a href="#home">Home</a></li>
  <li><a href="#about">Appointments</a></li>
  <li><a href="#about">Locations & Directions</a></li>
  <li><a href="#clients">Our Doctors</a></li>  
  <li><a href="#contact"><img src="/WEB PROJECT/images/contact-us-icon.png" alt="cu" class="cu">Contact Us</a></li>
</div>

<ul class="nave1">

<div class="formcontainer">
 

<form action="includes/registerformdoc.php" method="POST">
  

  <div class="container2">
    
<div class="fs-field">
    <label for="fname" class="label2"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="fname" class="input2">
</div>
<div class="fs-field1">
    <label for="lname" class="label2"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="lname" class="input2">
</div>
<div class="fs-field2">
    <label for="email" class="label2"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" class="input2">
</div>
<div class="fs-field3">
    <label for="password" class="label2"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" class="input2">
</div>
<div class="fs-field4">
    <label for="address" class="label2"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" class="input2">
</div>
<div class="fs-field5">
    <label for="phone" class="label2"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter PhoneNum" name="phone" class="input2">
</div>
<div class="fs-field6">  
    <button type="submit" class="but1">Register</button>
    </div>
    
  </div>

  
</form>
</div>

<img class="img1" src="\WEB PROJECT\images\specialist-female-doctor-copy-space.jpg">

</ul>
<div class="navfoot">
  
</div>
<div class="navfoot2">
  
</div>
</div>

</body>
</html>


