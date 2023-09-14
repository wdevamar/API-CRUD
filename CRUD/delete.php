<?php
require_once 'conn.php';
$id=$_GET['id'];
#echo $id;

$sql="delete from curdtbl where id='$id';";
if (mysqli_query($conn,$sql)) {
    echo "Data deleted";
}
else {
    echo "Not deleted";
}

?>