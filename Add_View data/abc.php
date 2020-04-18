<!DOCTYPE html>
<?php
include 'dbconfig.php';
$conn=mysqli_connect($host,$user,$pass,$db) or die("we couldn't connect");
 ?>
<html>
<head>
  <link rel="stylesheet" href="css1.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <script src="j1.js"></script>
  <script src="j2.js"></script>
  <link href="j3.js" rel="stylesheet" />
  <style>
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
#ed1{
  padding: 10px;
  font-size: 15px;
  height:30px;
  width:80px;
  color: blue;
  background: #FF8C00;
  border: none;
  border-radius: 5px; 

}
#ed1:hover{
  background: grey;
  color:black;
  font:white;
}
#del1{
  padding: 10px;
  font-size: 15px;
  height:30px;
  width:80px;
  color: blue;
  background: #FF8C00;
  border: none;
  border-radius: 5px; 

}
#del1:hover{
  background: grey;
  color:black;
  font:white;
}
  #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 6px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #FF8C00;
  color: blue;
}
</style>
</script>
<meta charset="utf-8">
<title>View Records</title>
</head>
<body>
	 <div class="abc1" align="left" width="50px">
    <button onclick="window.location.href='index1.php'">Back</button>
  </div>
<div class="form">
<h2>Book Records</h2>
                <div align="center">  
                     <input type="text" name="search" id="search" placeholder="search here" style="width:100%" class="form-control" />  
                </div>  
<table id="customers" width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr>
  <th><strong>SL.No</strong></th>
<th><strong>Book ID</strong></th>
<th><strong>Book Name</strong></th>
<th><strong>Branch</strong></th>
<th><strong>Author</strong></th>
<th><strong>Publisher</strong></th>
<th><strong>Edition</strong></th>
<th><strong>Volume</strong></th>
<th><strong>Copies</strong></th>
<th><strong>Amount</strong></th>
<th><strong>Sale Amount</strong></th>
<th><strong>Upto year</strong></th>
<th><strong>Rack No</strong></th>
<th><strong>Edit</strong></th>
<th><strong>Delete</strong></th>
</tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from book_detail ORDER BY book_id";
$resul = mysqli_query($conn,$sel_query);
if(mysqli_num_rows($resul)>0){
while($row = mysqli_fetch_assoc($resul)) { ?>
<tr><td align="center"><?php echo $count; ?></td> 
<td align="center"><?php echo $row["book_id"]; ?></td>
<td align="center"><?php echo $row["bookname"]; ?></td>
<td align="center"><?php echo $row["branch"]; ?></td>
<td align="center"><?php echo $row["author"]; ?></td>
<td align="center"><?php echo $row["publisher"]; ?></td>
<td align="center"><?php echo $row["edition"]; ?></td>  
<td align="center"><?php echo $row["volume"]; ?></td>
<td align="center"><?php echo $row["copies"]; ?></td>    
<td align="center"><?php echo $row["amount"]; ?></td>
<td align="center"><?php echo $row["saleamt"]; ?></td>
<td align="center"><?php echo $row["upto_year"]; ?></td> 
<td align="center"><?php echo $row["rackno"]; ?></td>
<td align="center">
	<button id="ed1" onclick="window.location.href='edit.php?id=<?php echo $row["book_id"];?>'">Edit</a>
</td>
<td align="center">
  <button id="del1" onclick="window.location.href='delete.php?id=<?php echo $row["book_id"];?>'">Delete</a>
</td>
</tr>
<?php $count++; }} $conn->close(); ?>
</tbody>
</table>
</div>
</body>
</html>
<script>  
      $(document).ready(function(){  
           $('#search').keyup(function(){  
                search_table($(this).val());  
           });  
           function search_table(value){  
                $('#customers tr').each(function(){  
                     var found = 'false';  
                     $(this).each(function(){  
                          if($(this).text().toLowerCase().indexOf(value.toLowerCase()) >= 0)  
                          {  
                               found = 'true';  
                          }  
                     });  
                     if(found == 'true')  
                     {  
                          $(this).show();  
                     }  
                     else  
                     {  
                          $(this).hide();  
                     }  
                });  
           }  
      });  
 </script>  



