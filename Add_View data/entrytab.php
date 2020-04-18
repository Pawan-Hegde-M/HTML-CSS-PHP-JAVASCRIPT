<!DOCTYPE html>
<html>
<?php
  if($_POST)
{
  include 'dbconfig.php';
$a11=$_POST['row-1-bid'];
$a12=$_POST['row-1-bn'];
$a13=$_POST['row-1-br'];
$a14=$_POST['row-1-auth'];
$a15=$_POST['row-1-pub'];
$a19=$_POST['row-1-ed'];
$a10=$_POST['row-1-vol'];
$a16=$_POST['row-1-cp'];
$a17=$_POST['row-1-amt'];
$a110=$_POST['row-1-samt'];
$a18=$_POST['row-1-uy'];
$a21=$_POST['row-2-bid'];
$a22=$_POST['row-2-bn'];
$a23=$_POST['row-2-br'];
$a24=$_POST['row-2-auth'];
$a25=$_POST['row-2-pub'];
$a29=$_POST['row-2-ed'];
$a20=$_POST['row-2-vol'];
$a26=$_POST['row-2-cp'];
$a27=$_POST['row-2-amt'];
$a120=$_POST['row-2-samt'];
$a28=$_POST['row-2-uy'];
$a31=$_POST['row-3-bid'];
$a32=$_POST['row-3-bn'];
$a33=$_POST['row-3-br'];
$a34=$_POST['row-3-auth'];
$a35=$_POST['row-3-pub'];
$a39=$_POST['row-3-ed'];
$a30=$_POST['row-3-vol'];
$a36=$_POST['row-3-cp'];
$a37=$_POST['row-3-amt'];
$a130=$_POST['row-3-samt'];
$a38=$_POST['row-3-uy'];
$a41=$_POST['row-4-bid'];
$a42=$_POST['row-4-bn'];
$a43=$_POST['row-4-br'];
$a44=$_POST['row-4-auth'];
$a45=$_POST['row-4-pub'];
$a49=$_POST['row-4-ed'];
$a40=$_POST['row-4-vol'];
$a46=$_POST['row-4-cp'];
$a47=$_POST['row-4-amt'];
$a140=$_POST['row-4-samt'];
$a48=$_POST['row-4-uy'];
$a51=$_POST['row-5-bid'];
$a52=$_POST['row-5-bn'];
$a53=$_POST['row-5-br'];
$a54=$_POST['row-5-auth'];
$a55=$_POST['row-5-pub'];
$a59=$_POST['row-5-ed'];
$a50=$_POST['row-5-vol'];
$a56=$_POST['row-5-cp'];
$a57=$_POST['row-5-amt'];
$a150=$_POST['row-5-samt'];
$a58=$_POST['row-5-uy'];
$a61=$_POST['row-6-bid'];
$a62=$_POST['row-6-bn'];
$a63=$_POST['row-6-br'];
$a64=$_POST['row-6-auth'];
$a65=$_POST['row-6-pub'];
$a69=$_POST['row-6-ed'];
$a60=$_POST['row-6-vol'];
$a66=$_POST['row-6-cp'];
$a67=$_POST['row-6-amt'];
$a160=$_POST['row-6-samt'];
$a68=$_POST['row-6-uy'];
$a71=$_POST['row-7-bid'];
$a72=$_POST['row-7-bn'];
$a73=$_POST['row-7-br'];
$a74=$_POST['row-7-auth'];
$a75=$_POST['row-7-pub'];
$a79=$_POST['row-7-ed'];
$a70=$_POST['row-7-vol'];
$a76=$_POST['row-7-cp'];
$a77=$_POST['row-7-amt'];
$a170=$_POST['row-7-samt'];
$a78=$_POST['row-7-uy'];
$a81=$_POST['row-8-bid'];
$a82=$_POST['row-8-bn'];
$a83=$_POST['row-8-br'];
$a84=$_POST['row-8-auth'];
$a85=$_POST['row-8-pub'];
$a89=$_POST['row-8-ed'];
$a80=$_POST['row-8-vol'];
$a86=$_POST['row-8-cp'];
$a87=$_POST['row-8-amt'];
$a180=$_POST['row-8-samt'];
$a88=$_POST['row-8-uy'];
$a91=$_POST['row-9-bid'];
$a92=$_POST['row-9-bn'];
$a93=$_POST['row-9-br'];
$a94=$_POST['row-9-auth'];
$a95=$_POST['row-9-pub'];
$a99=$_POST['row-9-ed'];
$a90=$_POST['row-9-vol'];
$a96=$_POST['row-9-cp'];
$a97=$_POST['row-9-amt'];
$a190=$_POST['row-9-samt'];
$a98=$_POST['row-9-uy'];
$a101=$_POST['row-10-bid'];
$a102=$_POST['row-10-bn'];
$a103=$_POST['row-10-br'];
$a104=$_POST['row-10-auth'];
$a105=$_POST['row-10-pub'];
$a109=$_POST['row-10-ed'];
$a100=$_POST['row-10-vol'];
$a106=$_POST['row-10-cp'];
$a107=$_POST['row-10-amt'];
$a1000=$_POST['row-10-samt'];
$a108=$_POST['row-10-uy'];
$ra=$_POST['abc'];
$con=mysqli_connect($host,$user,$pass,$db) or die("we couldn't connect");
//connectiontodatabase
if((!empty($a11))&&(!empty($a12))&&(!empty($a13))&&(!empty($a14))&&(!empty($a15))&&(!empty($a16))&&(!empty($a17))&&(!empty($a18))&&(!empty($a19))&&(!empty($a10))&&(!empty($a110)))
 {
  if(!empty($ra))
  {
$i1="INSERT INTO book_detail values ('$a11','$a12','$a13','$a14','$a15','$a19','$a10','$a16','$a17','$a110','$a18','$ra')";
}
else if(empty($ra))
{
   $i1="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a11','$a12','$a13','$a14','$a15','$a19','$a10','$a16','$a17','$a110','$a18')";
}
$i11=mysqli_query($con,$i1);
}
if((!empty($a21))&&(!empty($a22))&&(!empty($a23))&&(!empty($a24))&&(!empty($a25))&&(!empty($a26))&&(!empty($a27))&&(!empty($a28))&&(!empty($a29))&&(!empty($a20))&&(!empty($a120)))
 {
  if(!empty($ra))
  {
$i2="INSERT INTO book_detail values ('$a21','$a22','$a23','$a24','$a25','$a29','$a20','$a26','$a27','$a120','$a28','$ra')";
}
else if(empty($ra))
{
   $i2="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a21','$a22','$a23','$a24','$a25','$a29','$a20','$a26','$a27','$a120','$a28')";
}
 $i12=mysqli_query($con,$i2);
}
if((!empty($a31))&&(!empty($a32))&&(!empty($a33))&&(!empty($a34))&&(!empty($a35))&&(!empty($a36))&&(!empty($a37))&&(!empty($a38))&&(!empty($a39))&&(!empty($a30))&&(!empty($a130)))
{
  if(!empty($ra))
  {
$i3="INSERT INTO book_detail values ('$a31','$a32','$a33','$a34','$a35','$a39','$a30','$a36','$a37','$a130','$a38','$ra')";
}
else if(empty($ra))
{
   $i3="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a31','$a32','$a33','$a34','$a35','$a39','$a30','$a36','$a37','$a130','$a38')";
}
 $i13=mysqli_query($con,$i3);
}
if((!empty($a41))&&(!empty($a42))&&(!empty($a43))&&(!empty($a44))&&(!empty($a45))&&(!empty($a46))&&(!empty($a47))&&(!empty($a48))&&(!empty($a49))&&(!empty($a40))&&(!empty($a140)))
{
   if(!empty($ra))
  {
$i4="INSERT INTO book_detail values('$a41','$a42','$a43','$a44','$a45','$a49','$a40','$a46','$a47','$a140',$a48',
'$ra')";
}
else if(empty($ra))
{
   $i4="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a41','$a42','$a43','$a44','$a45','$a49','$a40','$a46','$a47','$a140','$a48')";
}
$i14=mysqli_query($con,$i4);
}
if((!empty($a51))&&(!empty($a52))&&(!empty($a53))&&(!empty($a54))&&(!empty($a55))&&(!empty($a56))&&(!empty($a57))&&(!empty($a58))&&(!empty($a49))&&(!empty($a40))&&(!empty($a140)))
{ 
   if(!empty($ra))
  {
$i5="INSERT INTO book_detail values('$a51','$a52','$a53','$a54','$a55','$a59','$a50','$a56','$a57','$a150','$a58',
'$ra')";
}
else if(empty($ra))
{
   $i5="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a51','$a52','$a53','$a54','$a55','$a59','$a50','$a56','$a57','$a150','$a58')";
}
$i15=mysqli_query($con,$i5);
}
if((!empty($a61))&&(!empty($a62))&&(!empty($a63))&&(!empty($a64))&&(!empty($a65))&&(!empty($a66))&&(!empty($a67))&&(!empty($a68))&&(!empty($a69))&&(!empty($a60))&&(!empty($a160))) 
{
  if(!empty($ra))
  {
$i6="INSERT INTO book_detail values('$a61','$a62','$a63','$a64','$a65','$a69','$a60','$a66','$a67','$a160',$a68',
'$ra')";
}
else if(empty($ra))
{
   $i6="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a61','$a62','$a63','$a64','$a65','$a69','$a60','$a66','$a67','$a160','$a68')";
}
$i16=mysqli_query($con,$i6);
}
if((!empty($a71))&&(!empty($a72))&&(!empty($a73))&&(!empty($a74))&&(!empty($a75))&&(!empty($a76))&&(!empty($a77))&&(!empty($a78))&&(!empty($a79))&&(!empty($a70))&&(!empty($a170))) 
{
  if(!empty($ra))
  {
$i7="INSERT INTO book_detail values('$a71','$a72','$a73','$a74','$a75','$a79','$a70','$a76','$a77','$a170',$a78',
'$ra')";
}
else if(empty($ra))
{
   $i7="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a71','$a72','$a73','$a74','$a75','$a79','$a70','$a76','$a77','$a170','$a78')";
}
$i17=mysqli_query($con,$i7);
}
if((!empty($a81))&&(!empty($a82))&&(!empty($a83))&&(!empty($a84))&&(!empty($a85))&&(!empty($a86))&&(!empty($a87))&&(!empty($a88))&&(!empty($a89))&&(!empty($a80))&&(!empty($a180))) 
{
  if(!empty($ra))
  {
$i8="INSERT INTO book_detail values('$a81','$a82','$a83','$a84','$a85','$a89','$a80','$a86','$a87','$a180',$a88',
'$ra')";
}
else if(empty($ra))
{
   $i8="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a81','$a82','$a83','$a84','$a85','$a89','$a80','$a86','$a87','$a180','$a88')";
}
$i18=mysqli_query($con,$i8);
}
if((!empty($a91))&&(!empty($a92))&&(!empty($a93))&&(!empty($a94))&&(!empty($a95))&&(!empty($a96))&&(!empty($a97))&&(!empty($a98))&&(!empty($a99))&&(!empty($a90))&&(!empty($a190))) 
{
  if(!empty($ra))
  {
$i9="INSERT INTO book_detail values('$a91','$a92','$a93','$a94','$a95','$a99','$a90','$a96','$a97','$a190',$a98',
'$ra')";
}
else if(empty($ra))
{
   $i9="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a91','$a92','$a93','$a94','$a95','$a99','$a90','$a96','$a97','$a190','$a98')";
}
$i19=mysqli_query($con,$i9);
}
if((!empty($a101))&&(!empty($a102))&&(!empty($a103))&&(!empty($a104))&&(!empty($a105))&&(!empty($a106))&&(!empty($a107))&&(!empty($a108))&&(!empty($a109))&&(!empty($a100))&&(!empty($a1000))) 
{
  if(!empty($ra))
  {
$i110="INSERT INTO book_detail values('$a101','$a102','$a103','$a104','$a105','$a109','$a100','$a106','$a107','$a1000',$a108','$ra')";
}
else if(empty($ra))
{
   $i110="INSERT INTO book_detail (book_id,bookname,branch,author,publisher,edition,volume,copies,amount,saleamt,upto_year) values ('$a101','$a102','$a103','$a104','$a105','$a109','$a100','$a106','$a107','$a1000','$a108')";
}
$i20=mysqli_query($con,$i110);
}
if(($i11)||($i12)||($i13)||($i14)||($i15)||($i16)||($i17)||($i18)||($i19)||($i20))
{
    $con->close(); 
  echo'<script>alert("successfully inserted")</script>';

}
else
{
    $con->close();
  header('location:entrytab.php');
}
}
?>
<head>
<title>Entry Tab</title>
<style>
input {
  padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
textarea{
   padding: 6px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 2px solid #FF8C00;
  padding: 6px;
}

#customers tr:nth-child(even){background-color: #ccc;}

#customers tr:nth-child(odd){background-color: #eee;}

#customers tr:hover{background-color: #aaa;}
#customers th {
  padding-top: px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FF8C00;
  color: blue;
}
.abc1 button{
  padding: 10px;
  font-size: 15px;
  height:40px;
  width:80px;
  color: blue;
  background: #FF8C00;
  border: none;
  border-radius: 5px;  
}
.abc1 button:hover{
  background: grey;
  color:black;
  font:white;

}
#sub{
  padding: 10px;
  font-size: 15px;
  height:40px;
  width:100px;
  color: blue;
  background:#FF8C00;
  border: none;
  border-radius: 5px;  
}
#sub:hover{
  background: grey;
  color:black;
  font:white;
}

</style>
</head>
<body> 

   <div class="abc1" align="left" width="50px">
    <button onclick="window.location.href='index1.php'">Back</button>
  </div>
  <br>
  <form method="POST" action=" ">
     <label id="customers" style="color:blue" >rack/self number</label>
   <input type="text" id="abc" name="abc" placeholder="optional">
    <br>
<table id="customers">
  <tr>
    <th><center>Sl.no</center></th>
    <th><center>Book ID</center></th>
    <th><center>Book Name</center></th>
    <th><center>Branch</center></th>
    <th><center>Author</center></th>
    <th><center>Publisher</center></th>
    <th><center>edition</center></th>
    <th><center>volume</center></th>
    <th><center>Copies</center></th>
    <th><center>MRP</center></th>
    <th><center>Sale Amount</center></th>
    <th><center>Upto Year</center></th>
  </tr>
  <tr>
   
  </div>
  <td> <center>1.</center></td>
 <td>  <input type="text" name="row-1-bid"  id="row-1-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-1-bn" name="row-1-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-1-br" list="bran" name="row-1-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-1-auth" name="row-1-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-1-pub" name="row-1-pub" style="width:120px;" ></td>
    <td><input type="text" id="row-1-ed" name="row-1-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-1-vol" name="row-1-vol" style="width:120px;" ></td>
  <td><input type="text" id="row-1-cp" name="row-1-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-1-amt" name="row-1-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-1-samt" name="row-1-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-1-uy" name="row-1-uy" value=" " style="width:120px;" ></td>
  </tr>
  <tr>
  <td> <center>2.</center></td>
 <td>  <input type="text" name="row-2-bid"  id="row-2-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-2-bn" name="row-2-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-2-br" list="bran" name="row-2-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-2-auth" name="row-2-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-2-pub" name="row-2-pub" style="width:120px;"  ></td>
      <td><input type="text" id="row-2-ed" name="row-2-ed" style="width:120px;"  ></td>
      <td><input type="text" id="row-2-vol" name="row-2-vol" style="width:120px;"  ></td>
  <td><input type="text" id="row-2-cp" name="row-2-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-2-amt" name="row-2-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-2-amt" name="row-2-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-2-uy" name="row-2-uy" value=" " style="width:120px;" ></td>
  </tr>
  <tr>
  <td> <center>3.</center></td>
   <td>  <input type="text" name="row-3-bid"  id="row-3-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-3-bn" name="row-3-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-3-br" list="bran" name="row-3-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>

  
  <td><input type="text" id="row-3-auth" name="row-3-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-3-pub" name="row-3-pub" style="width:120px;"  ></td>
      <td><input type="text" id="row-3-ed" name="row-3-ed" style="width:120px;"  ></td>
      <td><input type="text" id="row-3-vol" name="row-3-vol" style="width:120px;"  ></td>
  <td><input type="text" id="row-3-cp" name="row-3-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-3-amt" name="row-3-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-3-amt" name="row-3-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-3-uy" name="row-3-uy" value=" " style="width:120px;" ></td>
  </tr><tr>
  <td> <center>4.</center></td>
   <td>  <input type="text" name="row-4-bid"  id="row-4-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-4-bn" name="row-4-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-4-br" list="bran" name="row-4-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-4-auth" name="row-4-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-4-pub" name="row-4-pub"style="width:120px;"  ></td>
      <td><input type="text" id="row-4-ed" name="row-4-ed" style="width:120px;"  ></td>
      <td><input type="text" id="row-4-vol" name="row-4-vol" style="width:120px;"  ></td>
  <td><input type="text" id="row-4-cp" name="row-4-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-4-amt" name="row-4-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-4-amt" name="row-4-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-4-uy" name="row-4-uy" value=" " style="width:120px;" ></td>
  </tr><tr>
  <td> <center>5.</center></td>
   <td>  <input type="text" name="row-5-bid"  id="row-5-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-5-bn" name="row-5-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-5-br" list="bran" name="row-5-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-5-auth" name="row-5-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-5-pub" name="row-5-pub"style="width:120px;"  ></td>
      <td><input type="text" id="row-5-ed" name="row-5-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-5-vol" name="row-5-vol"style="width:120px;"  ></td>
  <td><input type="text" id="row-5-cp" name="row-5-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-5-amt" name="row-5-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-5-amt" name="row-5-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-5-uy" name="row-5-uy" value=" " style="width:120px;" ></td>

  </tr>
  <tr>
  <td> <center>6.</center></td>
   <td>  <input type="text" name="row-6-bid"  id="row-6-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-6-bn" name="row-6-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-6-br" list="bran" name="row-6-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-6-auth" name="row-6-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-6-pub" name="row-6-pub"style="width:120px;"  ></td>
    <td><input type="text" id="row-6-ed" name="row-6-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-6-vol" name="row-6-vol" style="width:120px;" ></td>
  <td><input type="text" id="row-6-cp" name="row-6-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-6-amt" name="row-6-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-6-amt" name="row-6-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-6-uy" name="row-6-uy" value=" " style="width:120px;" ></td>

  </tr>
  <tr>
  <td> <center>7.</center></td>
   <td>  <input type="text" name="row-7-bid"  id="row-7-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-7-bn" name="row-7-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-7-br" list="bran" name="row-7-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-7-auth" name="row-7-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-7-pub" name="row-7-pub"style="width:120px;"  ></td>
    <td><input type="text" id="row-7-ed" name="row-7-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-7-vol" name="row-7-vol" style="width:120px;" ></td>
  <td><input type="text" id="row-7-cp" name="row-7-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-7-amt" name="row-7-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-7-amt" name="row-7-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-7-uy" name="row-7-uy" value=" " style="width:120px;" ></td>

  </tr>
  <tr>
  <td> <center>8.</center></td>
   <td>  <input type="text" name="row-8-bid"  id="row-8-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-8-bn" name="row-8-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-8-br" list="bran" name="row-8-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-8-auth" name="row-8-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-8-pub" name="row-8-pub"style="width:120px;"  ></td>
    <td><input type="text" id="row-8-ed" name="row-8-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-8-vol" name="row-8-vol" style="width:120px;" ></td>
  <td><input type="text" id="row-8-cp" name="row-8-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-8-amt" name="row-8-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-8-amt" name="row-8-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-8-uy" name="row-8-uy" value=" " style="width:120px;" ></td>

  </tr>
  <tr>
  <td> <center>9.</center></td>
   <td>  <input type="text" name="row-9-bid"  id="row-9-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-9-bn" name="row-9-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-9-br" list="bran" name="row-9-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-9-auth" name="row-9-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-9-pub" name="row-9-pub"style="width:120px;"  ></td>
    <td><input type="text" id="row-9-ed" name="row-9-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-9-vol" name="row-9-vol" style="width:120px;" ></td>
  <td><input type="text" id="row-9-cp" name="row-9-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-9-amt" name="row-9-amt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-9-amt" name="row-9-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-9-uy" name="row-9-uy" value=" " style="width:120px;" ></td>

  </tr>
  <tr>
  <td> <center>10.</center></td>
   <td>  <input type="text" name="row-10-bid"  id="row-10-bid" style="width:100px;">
  </td>
  <td><textarea rows="1" colums="30" type="text" id="row-10-bn" name="row-10-bn" style="width:150px;"></textarea></td>

  <td><input type="text" id="row-10-br" list="bran" name="row-10-br" style="width:100px;"></td>
  <datalist id="bran">
    <option value="CS/IS">
    <option value="Civil">
    <option value="Mechanical">
    <option value="EEE">
    <option value="ECE">
    <option value="Physics"> 
    <option value="Chemistry"> 
    <option value="Mathematics">
    <option value="Non-Technical">
    <option value="Others">
    </option>  
  </datalist>
  <td><input type="text" id="row-10-auth" name="row-10-auth" style="width:100px;" ></td>
  <td><input type="text" id="row-10-pub" name="row-10-pub"style="width:120px;"  ></td>
    <td><input type="text" id="row-10-ed" name="row-10-ed" style="width:120px;" ></td>
      <td><input type="text" id="row-10-vol" name="row-10-vol"style="width:120px;" ></td>
  <td><input type="text" id="row-10-cp" name="row-10-cp" value=" " style="width:100px"></td>
<td><input type="text" id="row-10-amt" name="row-10-amt" value=" " style="width:120px;"  ></td>
<td><input type="text" id="row-10-amt" name="row-10-samt" value=" " style="width:120px;" ></td>
<td><input type="text" id="row-10-uy" name="row-10-uy" value=" " style="width:120px;" ></td>

  </tr>
</table>
<div align="center">
<input id="sub" type="submit" value="submit">
</div>
</form>
</body>
</html>
