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

   <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php"><img src="logo.PNG"></a>
  
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

<div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#slides" data-slide-to="0" class="active"></li>
          <li data-target="#slides" data-slide-to="1"></li>
          <li data-target="#slides" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="a.png">
            <div class="carousel-caption">
              <h1 class="display-2"> Drone Desk </h1>
              <h3> Level Up (Starting at $0.00)</h3>
              <button type="button" class="btn btn-outline-light btn-lg" data-target="#myModal" data-toggle="modal"> Sign in</button>
          </div>
</div>
          <div class="carousel-item">
            <img src="b.PNG">
          </div>
          <div class="carousel-item">
            <img src="c.JPG">
          </div>
        </div>
      </div>

        <div class="row jumbotron">
    <div class="col-md-5 col-sm-12 col-lg-5">
      <img class="home1" src="f.png">
    </div>
    <div class="col-md-7 col-lg-7 col-sm-12 clients">
      <h3 class="client_h1">Our Promise</h3>
      <hr class="small">
<div class="col-md-10 col-lg-10 col-sm-12 clients">
          <blockquote class="text-center">
            <i class="fas fa-quote-left"></i>
            <a href="#" data-toggle="tooltip" title="This is a tooltip"> Hover Over Me</a>
           It is the easiest to fly, least likely to crash drone on the planet and we’re proud to be building it right here in Nepal. Our customer support team sits in the same building with the engineering team that designed the product. We manufacture and repair across the street. If you have any issue, we’re here to help. And we stand behind with a simple promise: if you’re operating your drone within our Safe Flight guidelines, and it crashes, we’ll repair or replace it for free. It's that simple.

            <hr class="clients_hr">
            <cite>&#8212;-Eric, Small Business Owner</cite>
          </blockquote>

        </div>
    </div>
  </div>
      <div class="row">
    <div class="col-lg-6 box9">
      <img src="2.gif" class="img-fluid">
    </div>
     <div class="col-lg-6 box9">
      <h1 class="home_h1"> Introducing Drone Desk™<br>JOIN US</h1>
<p class="home_p">It does the flying,you do the doing.<br><h4>Smaller. Lighter. Quieter.</h4></p>
<br>
 <a href="contact.html" class="btn btn-outline-secondary btn2">Sign up to get notified.</a>
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
  <div class="modal fade" role="dialog" id="myModal">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                    <h3>
                      Join Us....
                    </h3>
                    <button type="button" class="close" data-dismiss="modal">x</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password">
                  </div> 
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-success"> Log In</button>
                  </div>   
                  </div> 
                </div>          
              </div>
            </div>

            <script>
              $(function()
              {
                 $('[data-toggle="tooltip"]').tooltip()
              });
            </script>
      
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>


  
  </body>
  </html>