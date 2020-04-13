<?php include 'INC/navbar.php' ?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SuperBean</title>
        <link rel="stylesheet" 
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="step4.css">
<p class="text-center">
  Insert Your Medical History Below!
</p>
<form> 
<div class="row">
    <div class="col-50">
      <h3 style="text-align:center">FILL OUT THE FORM BELOW</h3>
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
  
  <div class="medbtn"> 
  <a href="login.php" class="btn btn-default">
    Submit
  </a>
  </div>
  
 
  </form>
<!---Footer-->
<footer>
<div class="space2"></div>
<?php
include 'INC/footer.php'
?>
</footer>
</body>
</html>