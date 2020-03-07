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
$query = "SELECT * from book_detail where book_id='".$id."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<h1>Update Record</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$bi =$_REQUEST['book_id'];
$bn =$_REQUEST['bookname'];
$br =$_REQUEST['branch'];
$au =$_REQUEST['author'];
$pub =$_REQUEST['publisher'];
$ed =$_REQUEST['edition'];
$vol =$_REQUEST['volume'];
$cp =$_REQUEST['copies'];
$amt =$_REQUEST['amount'];
$samt =$_REQUEST['samount'];
$uy =$_REQUEST['upto_year'];
$rno =$_REQUEST['rackno'];



$update="UPDATE book_detail SET bookname='$bn',branch='$br',author='$au',publisher='$pub',edition='$ed',volume='$vol',copies='$cp',amount='$amt',saleamt='$samt',upto_year='$uy',rackno='$rno' where book_id='$bi'";
mysqli_query($con, $update) or die("we could not connect");
$status = "Record Updated Successfully. </br></br>
<a href='abc.php'>View Updated Record</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
$con->close();
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<table>
	<input name="id" type="hidden" value="<?php echo $row['id'];?>"/>
<tr><td><p>Book Id:</td><td><input type="text" name="book_id" placeholder="Enter book id" required value="<?php echo $row['book_id'];?>" /></p></td>
<td><p>Book Name:</td><td><input type="text" name="bookname" placeholder="Enter bookname" required value="<?php echo $row['bookname'];?>" /></p></td></tr>
<tr><td><p>Branch:</td><td><input type="text" name="branch" placeholder="Enter branch" required value="<?php echo $row['branch'];?>" /></p></td>
<td><p>Author:</td><td><input type="text" name="author" placeholder="Enter author" required value="<?php echo $row['author'];?>" /></p></td></tr>
<tr><td><p>Publisher:</td><td><input type="text" name="publisher" placeholder="Enter publisher name" required value="<?php echo $row['publisher'];?>" /></p></td>
<td><p>Edition:</td><td><input type="text" name="edition" placeholder="Enter Edition" required value="<?php echo $row['edition'];?>" /></p></td></tr>
<tr><td><p>Volume:</td><td><input type="text" name="volume" placeholder="Enter Volume" required value="<?php echo $row['volume'];?>" /></p></td>
<td><p>Copies:</td><td><input type="text" name="copies" placeholder="Enter number of copies" required value="<?php echo $row['copies'];?>" /></p></td></tr>
<tr><td><p>Amount:</td><td><input type="text" name="amount" placeholder="Enter amount" required value="<?php echo $row['amount'];?>" /></p></td>
<td><p>Sale Amount:</td><td><input type="text" name="samount" placeholder="Enter sale amount" required value="<?php echo $row['saleamt'];?>" /></p></td></tr>
<tr><td><p>Upto Year:</td><td><input type="text" name="upto_year" placeholder="Enter Upto Year" required value="<?php echo $row['upto_year'];?>" /></p></td>
<td><p>Rack_no:</td><td><input type="text" name="rackno" placeholder="Enter rack number" required value="<?php echo $row['rackno'];?>" /></p></td></tr>
<tr><td></td><td><p><input name="submit" type="submit" value="Update" /></p></td></tr>
</form>
<?php } ?>
</div>
</div>
</body>
</html>