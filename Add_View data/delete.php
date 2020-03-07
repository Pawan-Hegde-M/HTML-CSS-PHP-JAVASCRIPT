<?php
session_start();
if($_SESSION['log']=="true")
{
   
     if((time() -$_SESSION['last_login_timestamp'])>900)
   {
    header('location:logout.php');
   }
   else{
    $_SESSION['last_login_timestamp']=time();
   }
}
else {
  header('Location:main1.php');
 }
include 'dbconfig.php';
$con=mysqli_connect($host,$user,$pass,$db) or die("we couldn't connect");
$id=$_REQUEST['id'];
$query = "DELETE from book_detail WHERE book_id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
$con->close();
header("Location: abc.php"); 
?>