<?php

session_start();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Moat Dev Fest 2024</title>

<link href="assets/static/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="assets/static/heroes.css" rel="stylesheet">
  </head>
  <body>
   

       
<main class="form-signin w-100 m-auto">

<div class="container col-md-6 px-4 py-5" >
 
 
  <!-- content begins -->   
 
<h1 class="h3 mb-3 text-center">Moat DevFest 2024 <br> Create Account</h1>
<?php

if(isset($_SESSION['errormessage'])){
  print "<div class='alert alert-danger'>" . $_SESSION['errormessage'] . "</div>";
  unset($_SESSION['errormessage']);
}

?>



<form action="process/process_registration.php" method="post">   
<div class="form-group row mb-3">
  <div class="col-md-6">
    <div class="form-floating">
      <input type="text" name="fname" class="form-control" id="floatingfname" placeholder="Firstname">
      <label for="floatingfname">Firstname</label>
    </div>
   </div>
   <div class="col-md-6">
    <div class="form-floating">
      <input type="text" name="lname" class="form-control" id="floatinglname" placeholder="Lastname">
      <label for="floatinglname">Lastname</label>
    </div>
   </div>
</div>
    <div class="form-floating mb-3">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="pwd" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <div class="form-floating mb-3">
      <input type="password" name="confirmpwd" class="form-control" id="floatingPassword" placeholder="Confirm Password">
      <label for="floatingPassword">Confirm Password</label>
    </div>
    
     
    <button class="w-100 btn btn-lg btn-dark noround" name="btnsubmit" type="submit">Create Account</button>
    <div class="form-floating">
      <p> Have an account? <a href="login.php">Login</a>   </p>
     
    </div>
    
  </form>




<!-- content ends-->
  </div>

 


<!-- end more content-->
  
<!-- FOOTER -->
<footer class="container-fluid" style="height:100px; line-height:100px;">
  <p class="float-end"><a href="index.php" style="color:#FF5714">Back to Homepage</a></p>
  <p>&copy; 2023-2024 Moat Academy Cohort 26 Class Project</p>
</footer>

</main>

<script src="assets/static/bootstrap/js/bootstrap.bundle.min.js"></script>
      
  </body>
</html>