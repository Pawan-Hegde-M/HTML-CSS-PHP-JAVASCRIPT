<?php
include 'dbconfig.php';
$con=mysqli_connect($host,$user,$pass,$db) or die("we couldn't connect");
$id=$_REQUEST['id'];
$query = "DELETE from book_detail WHERE book_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
$con->close();
header("Location: abc.php"); 
?>
