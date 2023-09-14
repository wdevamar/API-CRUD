<?php
require_once 'conn.php';

$id=$_GET['id'];

$sql="select * from curdtbl where id= '$id' ;";

$record=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($record);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>
    Id:   <?php echo $row['id'];?><br>  
    Name:   <?php echo $row['name'];?><br>
    Email:   <?php echo $row['email'];?><br>
    Pass:   <?php echo $row['pass'];?><br>
</b>
</body>
</html>