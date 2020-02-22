<!DOCTYPE html>
<html>
<?php
if($_POST)
{
  include 'dbconfig.php';
  $username=$_POST['usrname'];
  $password=$_POST['psw'];
  $conn=mysqli_connect($host,$user,$pass,$db) or die("we couldn't connect");
  $querry1="SELECT * from user_details where username='$username' and role=0";
  $result1=mysqli_query($conn,$querry1);
  if(mysqli_num_rows($result1)>0)
  {
    $data=mysqli_fetch_array($result1);
    if(password_verify($password, $data['password']))
    {
    $conn->close();
    session_start();
    $_SESSION['log']='true';
    $_SESSION['last_login_timestamp']=time();
    header('Location:nextpage.php');
  
  }
  else
  {
      $conn->close();
        echo'<script>alert("wrong username or password")</script>'; 
  }
}
  else
  {
      $conn->close();
       echo'<script>alert("wrong username or password")</script>'; 
  }
}?>
<head>
  <title>Login</title>
  <style>
  <meta charset="utf-8">
  * { margin: 0px; padding: 0px; }
body {
  font-size: 120%;
    background-image:url("images/image.jpg");
    background-size: cover;
    background-attachment: fixed;
}
.header {
  width: 25%;
  margin: 150px auto 0px;
  color: blue;
  height:60px;
  background: #FF8C00;
  text-align: center;
  border: 1px solid #B0C4DE;
  border-bottom: none;
  border-radius: 10px 10px 0px 0px;
  padding: 20px;
  opacity: 0.8;
}

form, .content {
  width: 25%;
  margin: 0px auto;
  padding: 20px;
  border: 1px solid #B0C4DE;
  background: white;
  border-radius: 0px 0px 10px 10px;
  opacity: 0.7;
}
.input-group {
  margin: 10px 5px 10px 5px;
}
.input-group label {
  display: block;
  text-align: center;
  margin: 5px;
}
.input-group input {
  height: 30px;
  width: 95%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
#user_type {
  height: 40px;
  width: 98%;
  padding: 5px 10px;
  background: white;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
.btn {
  padding: 10px;
  font-size: 15px;
  color: blue;
  background-color: #FF8C00;
  border: none;
  border-radius: 5px;
}
.btn:hover{
  background: grey;
  color: black;
}
  body{
    background-image:url("images/image.jpg");
         background-size: cover;
    background-attachment: fixed;
  }


</style>
</head>
<body>
<div class="header">
  <h2>Login System</h2>
</div>
<form method="POST" action="">
  <div class="input-group">
    <label>Username</label>
    <input type="text" name="usrname" value=""  required>
  </div>
  
  <div class="input-group">
    <label> Password</label>
    <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@$*^!#&]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter and a special character, and at least 8 or more characters" required>
  </div>

  <div class="input-group" align="center">
    <button type="submit" class="btn" name="register_btn"  >Login</button>
  </div>
</form>
</body>
</html>