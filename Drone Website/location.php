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
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
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
        <a class="nav-link" href="contact.php">Sign Up</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="signin.php">Sign in</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="location.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Find Us
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

<div class="header">
<div class="row">
  <div class="col-12">
    <img src="header.PNG">
  </div>
  </div>
</div>
      <div class="container-fluid">

  <div class="row">
    <div class="col-lg-6">
      <h1 class="location"> Find Us...</h1>
    <hr class="small">
     <div class="input-group md-form form-sm form-2 pl-0">
  <input class="form-control my-0 py-1 amber-border" type="text" placeholder="Search" aria-label="Search">
  <div class="input-group-append">
    <span class="input-group-text amber lighten-3" id="basic-text1"><i class="fas fa-search text-grey"
        aria-hidden="true"></i></span>

  </div>
</div>
</div>
     <div class="col-lg-6">
       <img src="map.png" class="img-fluid">
    </div>
  </div>
  <div class="container-fluid">
<div class="row table_footer">
      <div class="col-12">
        <table id="myTable">
          <thead>
            <tr>
              <th>Days</th>
              <th>Store</th>
              <th>Hours</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Mon-Fri</td>
              <td>Kathmandu</td>
              <td>7am-4pm</td> 
            </tr>

              <tr>
              <td>Sun-Sat</td>
              <td>Pokhara</td>
              <td>10am-3pm</td> 
            </tr>
             <tr>
              <td>Mon-Fri</td>
              <td>Chitwan</td>
              <td>12am-6pm</td> 
            </tr>
            <tr>
              <td>Sun-Sat</td>
              <td>Lalitpur</td>
              <td>10am-3pm</td> 
            </tr>

            <tr>
              <td>Tue-Fri</td>
              <td>Jomsom</td>
              <td>10am-3pm</td> 
            </tr>

          </tbody>
        </table>
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
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
  
  </body>
  </html>