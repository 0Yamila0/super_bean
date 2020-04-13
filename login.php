<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SuperBean</title>
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="login.css">
        <link href="https://fonts.googleapis.com/css?family=Oswald|Special+Elite&display=swap" rel="stylesheet">
        
    </head>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php"> </a>
  
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"> Home <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="topsbean.php">Top Beans</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="step1.php"> Build A Bean</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php"> Account</a>
        </li>

      </ul>
    </div>
  </nav>
<br>

    <h1 class="section text-center"> ACCOUNT/LOGIN</h1>



<!---Beta-->
<div class="row">
    <div class="col-50">
      <h3 style="text-align:center">Personal Information</h3>
      <label for="fname"><i class="fa fa-user"></i> First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="John">
      <label for="lname"><i class="fa fa-user"></i> Last Name</label>
      <input type="text" id="fname" name="firstname" placeholder="Doe">
      <label for="email"><i class="fa fa-envelope"></i> Date of Birth</label>
      <input type="text" id="date" name="email" placeholder="DD/MM/YYYY">
      <label for="gen"><i class="fa fa-address-card-o"></i> Gender</label>
      <input type="text" id="adr" name="address" placeholder="M/F/Other">
      <label for="address"><i class="fa fa-institution"></i> Address</label>
      <input type="text" id="city" name="city" placeholder="542 W. 15th Street">
      <label for="city"><i class="fa fa-institution"></i> City</label>
      <input type="text" id="city" name="city" placeholder="Jackson">
      <label for="state"><i class="fa fa-institution"></i>State</label>
      <input type="text" id="state" name="state" placeholder="Tennessee">
      <label for="country"><i class="fa fa-institution"></i>Country</label>
      <input type="text" id="country" name="country" placeholder="United States">
      <label for="ccnum">Cell Number</label>
      <input type="text" id="cnum" name="cellnumber" placeholder="555-555-5555">
      <label for="expmonth">Home Phone</label>
      <input type="text" id="hmun" name="homenumber" placeholder="555-555-5555">
      <label for="expmonth">Work Phone</label>
      <input type="text" id="wnym" name="worknumber" placeholder="555-555-5555">
 </div>
</div>


<!---End Beta-->




<!---Footer-->    
<footer>
<div class="space2"></div>
<?php
include 'INC/footer.php'
?>
</footer>
    </body>