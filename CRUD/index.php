<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" id="name" placeholder="Enter Name"><br>
        <input type="text" name="email" id="email" placeholder="Enter email"><br>
        <input type="text" name="pass" id="pass" placeholder="Enter Password"><br>
        <input type="submit" value="submit" name="submit">

    </form>
   
<?php
require_once 'conn.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="insert into curdtbl(name,email,pass) values('$name','$email','$pass');";
    $query=mysqli_query($conn,$sql);
    if ($query) {
        echo "Record Inserted";
    }
    else
    {
        echo "NOt Inserted".mysqli_error($conn);
    }
}

?>


</body>
</html>