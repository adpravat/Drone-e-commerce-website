<?php
session_start();
require_once('connection.php');
if(isset($_POST['add']))
{
  //print_r($_POST['product_id']);
  if(isset($_SESSION['favorite']))
  {
    $product_array_id=array_column($_SESSION['favorite'],"product_id");
     if(in_array($_POST['product_id'],$product_array_id))
     {
      echo"<script>alert('Its is already added.')</script>";
      echo"<script>window.location='products.php'</script>";
     }
     else
     {
      $count=count($_SESSION['favorite']);
      $product_array= array
    (
      'product_id'=>$_POST['product_id']
    );
    $_SESSION['favorite'][$count]=$product_array;
     }
  }
  else
  {
    $product_array= array
    (
      'product_id'=>$_POST['product_id']
    );
    //Creating new session variable
    $_SESSION['favorite'][0]=$product_array;
   // print_r($_SESSION['favorite']);
  }
}
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
<div class="row box1">
      <div class="col-lg-6">      
<h1>Drone desk Categories</h1>
<p class="text-center">Skydio 2 is the result of over a decade of R&D by world experts in drones, AI, and computer vision.Our goal as a company is very simple: make drones useful for people by making them smart.</p>
<a href="#" class="btn btn-outline-secondary btn1">Buy now at $0.00</a>
    </div>
    <div class="col-lg-6">
      <div class="video-bg">
  <div class="video-wrap">
    <iframe width="560" height="315" src="https://www.youtube.com/embed/m5WvcXp2dqU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  </div>
    </div>
    </div> 
  </div>

  <div class="jumbotron container-fluid">
 
      <h3 class="product_h1">Desk Drones</h3>
      <hr class="small">

      <div class="row no-padding">
                <?php
        $query="SELECT * FROM Products ORDER BY ID ASC";
  $result=mysqli_query($conn,$query);
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {
      ?>
        <div class="col-sm-4">

          <form method="post" action="products.php?action=add&id=<?php echo $row['ID'];?>">
          <div class="menu">
          <a href="7.gif" target="_blank" data-toggle="tooltip" title="Click Me">
            <img src="<?php echo $row["Img"];?>">
            <h6 class="p_heading">Price:$ <?php echo $row["Price"];?></h6>
             <input type="hidden" name="hidden_name" value="<?php echo $row["Name"];?>"/>
            <input type="hidden" name="product_id" value="<?php echo $row["ID"];?>"/>
            <input type="hidden" name="img_name" value="<?php echo $row["Img"];?>"/>
            <input type="hidden" name="hidden_price" value="<?php echo $row["Price"];?>"/>
           <button type="submit" name="add" class="btn btn-secondary">Add To Favorite</button>
             </a>
        </div>
      </form>
        </div>
        <?php
      }
    }
        ?>

        <div class="narrow text-center">
          <div class="col-12">
            <p class="lead"> Come shop with us.</p>
            <a class="btn btn-warning btn-md" href="location.php">
              Location
            </a>
          </div>
        </div>
      </div>
    </div>

     <!--</div>

    <div class="container-fluid">
      <div class="row padding">
        <div class="col-sm-4">
           <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card --
  <div class="card1">

    <!-- Card header --
    <div class="card-header" role="tab" id="headingOne1">
      <a data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 class="mb-0">
          Men <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body --
    <div id="collapseOne1" class="collapse show" role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
        <p>High Top</p>
        <p>Low Top</p>
        <p>Slip On</p>
        <p>Platform</p>
      </div>
    </div>

  </div>
        </div>
      </div>
      <div class="col-sm-4">
           <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card --
  <div class="card1">

    <!-- Card header --
    <div class="card-header" role="tab" id="headingTwo2">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 class="mb-0">
          Women <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body --
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
        <p>High Top</p>
        <p>Low Top</p>
        <p>Slip On</p>
        <p>Platform</p>
      </div>
    </div>

  </div>
        </div>
      </div>
      <div class="col-sm-4">
           <div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card --
  <div class="card1">

    <!-- Card header --
    <div class="card-header" role="tab" id="headingThree3">
      <a class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseThree3"
        aria-expanded="false" aria-controls="collapseThree3">
        <h5 class="mb-0">
          Kids <i class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body --
    <div id="collapseThree3" class="collapse" role="tabpanel" aria-labelledby="headingThree3"
      data-parent="#accordionEx">
      <div class="card-body">
         <p>High Top</p>
        <p>Low Top</p>
        <p>Slip On</p>
        <p>Platform</p>
        
      </div>
    </div>

  </div>
        </div>
      </div>
    </div>
  </div> -->


  <div class="row jumbotron">
    <div class="col-lg-6">
      <img src="1.gif" class="img-fluid">
    </div>
     <div class="col-lg-6">
      <h1 class="pro_h1"> BACK TO WHERE</h1>
<h1 >IT ALL STARTED</h1>
<p>Our goal as a company is very simple:<br> make drones useful for people by making them smart.</p>
<br>
 <a href="contact.html" class="btn btn-outline-secondary btn2">Sign up to get UVify Draco drone.</a>
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