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
  header('Location:loginpage.php');
 }
 ?>