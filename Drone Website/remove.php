<?php
//Set up the database access credentials
require_once('connection.php');
if(isset($_GET['del']))
{
	$id= $_GET['del'];

	//Construct DELETE query to remove record 
	$query="DELETE FROM products WHERE ID='$id'";

	//run $query
    $result=mysqli_query($conn,$query);

}

// check to see if any rows were affected
if (mysqli_affected_rows($conn) > 0) 
{
 //If yes , return to calling page(stored in the server variables)
 header("Location:{$_SERVER['HTTP_REFERER']}");
} else {
 // print error message
 echo "Error in query:$query.".mysqli_error($conn);
 exit ;
}
