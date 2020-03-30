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
    <a class="navbar-brand" href="index.php"> </a>
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
    <h1 class="text-center"> BUILD-A-BEAN</h1>
    <div class="container">
    <div class="row">
      <div class="col">
        <p> Pick Your Time Length!</p>
        <div class="card bg-dark text-black"> <a class="nextstep" href="step4.php">
            <img src="img/time1.PNG" class="card-img">
            <div class="card-img-overlay">
              <h5 class="card-title"> 30 </h5>
              <p class="card-text"> ksdnfklnsdfjklsdnfljknsd
                d;kfnlkdnvdjklfvnlkjdfnvkldsnvklddnvldkf
              </p>
              <p> dkjnfkdjcvnljkdnvlkdfnvklnfv
                dslkcfnsdlnjhdsnjfcndc
              </p>
            </div>
          </div> </a>
    </div>
    <div class="col text-center">
        <p> Pick Your Step!</p>
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><a href="step1.php"> Step 1</a></li>
          <li class="list-group-item"><a href="step2.php"> Step 2</a></li>
          <li class="list-group-item"><a href="step3.php"> Step 3</a></li>
          <li class="list-group-item"> <a href="step4.php"> Step 4</a></li>
        </ul>
    </div>
    </div>
    </div>
<!---Footer-->
<footer>
<div class="space2"></div>
<?php
include 'INC/footer.php'
?>
</footer>
</body>
</html>
