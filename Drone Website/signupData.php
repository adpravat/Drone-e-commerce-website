<?php
require_once('connection.php');

if(isset($_POST['signup']))
{
$firstName=$_POST['fname'];
 $lastName =$_POST['lname'];
 $password=$_POST['pass'];
 $gender=$_POST['gender'];
 $add =$_POST['address'];

if((empty($_POST['uname']))||(empty($_POST['pass']))||(empty($_POST['email']))||(empty($_POST['fname']))||(empty($_POST['lname'])))
{
  echo "Please fill all the fields.";
}

else 
  {
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
{
  echo "The email is not valid.";
}

else
{
  $uname=mysqli_escape_string($conn,$_POST['uname']);
  $sql_U = "SELECT * FROM Customer WHERE Username='$uname'";
   $result_U=mysqli_query($conn,$sql_u);
//Checking if username is available
if(mysqli_num_rows($result_U)>0)
{
  echo "Sorry!Username already taken.";
   
}
else
{
  $email=mysqli_escape_string($conn,$_POST['email']);
  $sql_e = "SELECT * FROM Customer WHERE Email='$email'";
  $result_e=mysqli_query($conn,$sql_e);
  if (mysqli_num_rows($result_e)>0)
   {
     echo "Sorry!Email already taken.";
  }
  
else
{
   $insert= "INSERT INTO Customer (Firstname,Lastname,Username,Password,Email,Gender,Address) VALUES ('$firstName','$lastName','$uname','$password','$email','$gender','$add')";
   $result_i=mysqli_query($conn,$insert);
   if($result_i)
   {
    echo "Records added successfully.";
    header('location:signin.php');
} 
else
{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

}

}
}
}
}



?>