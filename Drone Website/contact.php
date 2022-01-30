<?php 
session_start();
require_once('connection.php');
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="author" content="Prabhat">
    <title>Drone Desk</title> 
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
  <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
  </head>
  <body>

   <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.html"><img src="logo.png"></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="nav navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cart.php">Favorite</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="signin.php">Join</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="location.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Locations
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="location.php">Mavic Series</a>
          <a class="dropdown-item" href="location.php">Phantom Series</a>
        </div>
      </li>  
    </ul> 
    <?php
          if(isset($_SESSION['username']))
          {
            ?>
         
          <a href="signout.php">Logout</a>
         <?php
       }
       ?>   
  </div>
</nav>

<div class="login_bg">
<div class="container">
  <div class="row">
    <div class="col-md-7">
      <h1 class="login_text"> Register Now..</h1>
      <p class="login-text">Experience worry-free, high speed manual flight with full obstacle avoidance in every direction and Capture remote vistas by extending your flight range up to 2.5 km. In addition, Get the shot with Controller-driven cinematic skills.</p>
    </div>
    <div class="col-md-5 form">
       <form method="post" action="signupData.php">
      <div class="row">
        <div class="col-md-6">
          <h3 class="textR" >Create Account</h3>
        </div>
        <div class="col-md-6">
          <i class="fas fa-edit"></i>
        </div>
      </div>
        <hr>
        <div class="row">
          
          <label for="Firstname" class="label col-md-2">FirstName</label>

        <div class="col-md-10">
            <input type="text" name="fname" class="form-control" placeholder="Username">
      <div class="invalid-feedback">
        Please provide a valid username.
      </div>
 </div>
</div>
      <div class="row">
          <label for="Lastname" class="label col-md-2">LastName</label>
          <div class="col-md-10">
            <input type="text" name="lname" class="form-control"  placeholder="Username">
      <div class="invalid-feedback">
        Please provide a valid username.
      </div>
    </div>
  </div>
      <div class="row">
          <label for="Username" class="label col-md-2">Username</label>
          <div class="col-md-10">
            <input type="text" name="uname" class="form-control"  placeholder="Username">
      <div class="invalid-feedback">
        Please provide a valid username.
      </div>
          </div>
        </div>
         <div class="row">
          <label for="Password" class="label col-md-2">Password</label>
          <div class="col-md-10">
            <input type="text" name="pass" class="form-control" id="validationServer04" placeholder="Password">
      <div class="invalid-feedback">
        Please provide a valid password.
        
      </div>
            <input type="checkbox"><small> Remember Me</small>
         
        </div>
      </div>
         <div class="row">
          <label for="Email" class="label col-md-2 ">Email</label>
          <div class="col-md-10">
            <input type="text" name="email" class="form-control" id="validationServer05" placeholder="Email">
      <div class="invalid-feedback">
        Please provide a valid email.   
      </div>
          </div>
        </div>
        <div class="row">
          <label for="Gender" class="label col-md-2">Gender</label>
          <div class="col-md-10">
            <input type="radio" value="male" name="gender"> <small> Male  </small>
            <input type="radio" value="female" name="gender"> <small > Female  </small>
          </div>
        </div>
         <div class="row">
          <label for="Address" class="label col-md-2 ">Address</label>
          <div class="col-md-10">
            <input type="text" name="address" class="form-control" id="validationServer06" placeholder="Address">
      <div class="invalid-feedback">
        Please provide a valid email.   
      </div>
             <div class="invalid-feedback">
        Please select.   
      </div>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-12">
       <input type="submit" class="btn btn-info" name="signup"/>
       <a href="home.php"><div class="btn btn-warning">Cancel</div></a>
      </div>
    </div>

  </div>
  </form>
</div>
</div>
</div>
</div>
</div>

<footer>
  <div class="row justify-content-center">
    <div class="col-md-5 text-center">
      <img src="logo.png">
      <p>Prefer the still life? Also features a dedicated photo mode for capturing 12MP HDR photos for a variety of shooting options, including single, interval and more.</p>
      <strong>Contact Info</strong>
      <p>000-000-000<br>abc@gmail.com</p>
      <a href="facebook.com" target="_blank"><i class="fab fa-facebook-square"></i></a>
            <a href="twitter.com" target="_blank"><i class="fab fa-twitter-square"></i></a>
                  <a href="youtube.com" target="_blank"><i class="fab fa-youtube-square"></i></a>
    </div>
    <hr class="socket">
    &copy; Drone Desk
  </div>
</footer>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
  
  </body>
  </html>