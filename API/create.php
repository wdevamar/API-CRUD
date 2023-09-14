<?php


require_once 'conn.php';

header("Content-type:application/Json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Method:POST");

$data = json_decode(file_get_contents("php://input"));


$query="INSERT INTO  curdtbl(name,email,pass) values('{$data->name}','{$data->email}','{$data->pass}');";

$res=mysqli_query($conn,$query);

if($res)
{
    echo json_encode(
        [
            "code"=>200,
            "status"=>true,
            "error"=>true,
            "Message"=>"Record Inserted",
         
        ],
        JSON_PRETTY_PRINT //to print formetted
        );
}
else{
 
    echo json_encode(
        [
            "code"=>200,
            "status"=>false,
            "error"=>true,
            "Message"=>"Record Not Inserted",
            
        ],
        JSON_PRETTY_PRINT
        );   
}

?>