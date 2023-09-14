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
<form action="" method="post">
        <input type="text" name="email"  id="email" placeholder="Enter email"><br>
        <input type="text" name="pass" id="pass"  placeholder="Enter Password"><br>
        <input type="submit" value="Login" name="login">
    </form>
    
<?php
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $pass=$_POST['pass'];

     if ($email=$row['email'] && $pass=$row['pass'])
    {
      header('Location:www.facebook.com');
    }
    else
    {
        echo "Login Not Success";
    }
}

?>


</body>
</html>
</body>
</html>