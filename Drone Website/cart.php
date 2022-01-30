<?php
session_start();
require_once('connection.php');


if(isset($_GET["action"]))
{
  if($_GET["action"]=="delete")
  {
    foreach($_SESSION["favorite"] as $keys=>$values)
    {
      if($values["ID"]==$_GET["ID"])
      {
        unset($_SESSION["favorite"][$keys]);
        header("location:cart.php");
      }
    }
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
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
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
      <li class="nav-item">
        <a class="nav-link" href="home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="products.php">Products</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="cart.php">Favorite</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="signin.php">Join</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="location.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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


  <div class="container-fluid">
    <div class="row">
    <div class="col-12">
  
  <table id="cart" class="table table-hover table-condensed">
            <thead>
            <tr>
              <th style="width:30%">Product</th>
              <th style="width:20%">Name</th>
              <th style="width:10%">Price</th>
              <th style="width:10%">Remove</th>
              <th style="width:10%"></th>
            </tr>
          </thead>
          <tbody>
            <?php
            
            $product_id=array_column($_SESSION['favorite'],'product_id');

           $query="SELECT * FROM products ORDER BY ID ASC";
  $result=mysqli_query($conn,$query);

  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result))
    {
              foreach($product_id as $id)
              {
                if($row['ID']==$id)
        {
          ?>
            
            <tr>
              <td data-th="Product">

                  <div class="col-sm-4 hidden-xs"><img src="<?php echo $row["Img"];?>" alt="..." class="img-responsive"/></div>
                  </td>
                  <td data-th="Name">
                  <div class="col-sm-6">
                    <h4 class="product"><?php echo $row["Name"];?></h4>
                  </div>
              </td>
              <td data-th="Price"><?php echo $row["Price"];?></td>
            
            
          
      <td data-th="Remove"><button class="btn btn-danger"><a href="cart.php?action=delete&id=<?php echo $row["ID"]?>;"><i class="fa fa-trash-o"></i></a></button></td>
       <td data-th=""> <a href="#" class="btn btn-dark">Checkout <i class="fa fa-angle-right"></i></a></td> 
        </tr>

              <?php
          }
        }
      }
    }
                ?>
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
<script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>

</body>
</html>