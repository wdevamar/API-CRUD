<?php
$conn=mysqli_connect('localhost:3308','root','','curd');
if ($conn) {
    #echo "connected";(if connected not need to show)

}
else {
    echo "Connect Error".mysqli_connect_error();
}



?>