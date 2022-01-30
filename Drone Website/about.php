<?php
session_start();
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
            <a class="navbar-brand" href="home.php"><img src="logo.png"></a>
  
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

<div class="container-fluid">
<div class="header">
<div class="row">
  <div class="col-12">
    <img src="header.PNG">
  </div>
  </div>
</div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <h1 class="about_h1">About Us</h1>
    </div>
      <hr class="small">
  </div>
</div>


<div class="container-fluid padding">
        <div class="row padding">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card">
            <i class="fas fa-gifts fa-2x"></i>
              <div class="card-body">
              <h4 class="card-title"> Drone Gift Cards</h4>
              <p class="card-text"> Give them exactly what they want with a Gift Card.</p>
              <a href="cart.php" class="btn btn-outline-secondary">Learn More</a> 
            </div>
          </div>
        </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card">
              <i class="fas fa-shipping-fast fa-2x"></i>
              <div class="card-body">
              <h4 class="card-title"> Fast, Free Shipping</h4>
              <p class="card-text">Orders over $50 ship for free. Sign up for a desk account and get free shipping.</p>
              <a href="cart.php" class="btn btn-outline-secondary">Learn More</a> 
            </div>
          </div>
        </div>
          <div class="col-md-3 col-sm-6 col-xs-12" >
            <div class="card">
             <i class="fas fa-box-open fa-2x"></i>
              <div class="card-body">
              <h4 class="card-title"> Worry-Free Returns</h4>
              <p class="card-text text-center"> Not happy? Return or exchange your purchase for free within 30 days.</p>
              <a href="cart.php" class="btn btn-outline-secondary">Learn More</a> 
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="card">
             <i class="fas fa-shoe-prints fa-2x"></i>
              <div class="card-body">
              <h4 class="card-title"> New Arrivals</h4>
              <p class="card-text"> Check out our new drones every month by joining the newsletter.</p>
              <a href="products.php" class="btn btn-outline-secondary">Learn More</a> 
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