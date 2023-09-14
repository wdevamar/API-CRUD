<?php
require_once 'conn.php';
$sql="select * from curdtbl;";
$record=mysqli_query($conn,$sql);
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
    <table border="2">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Pass</th>
            <th colspan="4">Action</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($record)):
        ?>
        <tr>
            <th><?php echo $row['id'];?></th>
            <th><?php echo $row['name'];?></th>
            <th><?php echo $row['email'];?></th>
            <th><?php echo $row['pass'];?></th>
            <th><a href="delete.php?id=<?php echo $row['id']?>">Delete</a></th>
            <th><a href="update.php?id=<?php echo $row['id']?>">Update</a></th>
            <th><a href="details.php?id=<?php echo $row['id']?>">Details</a></th>
            <th><a href="login.php?id=<?php echo $row['id']?>">Login</a></th>
            
        </tr>
            <?php 
            endwhile;
            ?>
    </table>
</body>
</html>