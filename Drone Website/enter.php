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
   <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
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
        <a class="nav-link" href="dashboard.php">Dashboard</a>
      </li>
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
</div>
</nav>


  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="dashboard.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="enter.php">Update</a>
          <a class="dropdown-item" href="view.php">View DB</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="signout.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Logout</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Page</a>
          </li>
          <li class="breadcrumb-item active">Enter New Product</li>
        </ol>

    
    <div class="boxD">    
<div class="col-md-12 form1">
       <form method="post" action="enter.php">
      <div class="row">
        <div class="col-md-6">
          <h3 class="textR" >Details:</h3>
        </div>
        <div class="col-md-6">
          <i class="fas fa-edit"></i>
        </div>
      </div>
        <hr>
        <div class="row">
          <label for="productid" class="label col-md-2">Product ID</label>
        <div class="col-md-5">
            <input type="number" name="id" class="form-control" placeholder="ProductId">
</div>
</div>
      <div class="row">
          <label for="productname" class="label col-md-2">Product Name</label>
          <div class="col-md-5">
            <input type="text" name="name" class="form-control"  placeholder="ProductName">
  </div>
</div>
      <div class="row">
          <label for="price" class="label col-md-2">Product Price:</label>
          <div class="col-md-5">
            <input type="number" name="price" class="form-control"  placeholder="Price">
          </div>
        </div>
         <div class="row">
          <label for="img" class="label col-md-2">Product Img:</label>
          <div class="col-md-5">
            <input type="text" name="img" class="form-control" id="validationServer04" placeholder="Password">       
        </div>
      </div>
         <div class="row">
          <label for="category" class="label col-md-2 ">Category</label>
          <div class="col-md-5">
            <input type="text" name="category" class="form-control" id="validationServer06" placeholder="Address">
          </div>
        </div>
        <div class="row text-center">
          <div class="col-10">
       <input type="submit" class="btn btn-info" name="enter"/>
       <a href="home.php"><div class="btn btn-warning">Cancel</div></a>
      </div>
    </div>
  </div></div></form>
<?php
//Set up the database access credentials
require_once('connection.php');

//gathering data from "FORM"
if(isset($_POST['enter']))
{
 $prodid=$_POST['id'];
 $prodName=$_POST['name'];
 $prodPrice=$_POST['price'];
 $imgName=$_POST['img'];
 $category=$_POST['category'];

  $sql="INSERT INTO products (ID,Name,Price,Img,Category) VALUES ('$prodid','$prodName','$prodPrice','$imgName','$category')";
  //run $query
 $query=mysqli_query($conn,$sql);
  if($query)
   {
    echo "Records added successfully.";
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
  
 }

?>





</div></div></div></div></div>




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
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>