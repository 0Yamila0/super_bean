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
    <link rel="stylesheet" href="yamila.css">
    
</head>
<body>
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.html"> </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon">♪♪♪</span>
    </button>
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

<p class="text-center">
  Insert Your Medical History Below!
</p>
<form> 
  <input type="text" name = "1nam" placeholder="First Name">
  <input type="text" name = "2nam" placeholder="Last Name">
  <input type="number" name="age" placeholder="Age">
  <input type="text" name="allg" placeholder="Allergies">
  <select name="operator">
  <option> Option 1</option>
  <option> Option 2</option>
  <option> Option 3</option>
  <option> Option 4</option>
  <option> Option 5</option>
  </select>
  
  <div class="medbtn"> 
  <a href="login.php" class="btn btn-default">
    Submit
  </a>
  </div>
  
 
  </form>

</body>
</html>