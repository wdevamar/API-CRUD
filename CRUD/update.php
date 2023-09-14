<?php
require_once 'conn.php';
$id=$_GET['id'];
$sql="select * from curdtbl where id='$id';";
$record=mysqli_query($conn,$sql);
$output=mysqli_fetch_assoc($record);
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
        <input type="text" name="name" value="<?php echo $output['name']; ?>" id="name" placeholder="Enter Name"><br>
        <input type="text" name="email" value="<?php echo $output['email']; ?>" id="email" placeholder="Enter email"><br>
        <input type="text" name="pass" id="pass" value="<?php echo $output['pass']; ?>" placeholder="Enter Password"><br>
        <input type="submit" value="Update" name="submit">
    </form>

<?php
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    $sql="update curdtbl set name='{$name}',email='{$email}',pass='{$pass}' where id='{$id}';";
    $query=mysqli_query($conn,$sql);
    if ($query) {
        echo "Record Updated";
    }
    else
    {
        echo "Not Updated".mysqli_error($conn);
    }
}

?>


</body>
</html>