<?php


require_once 'conn.php';

header("Content-type:application/Json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Method:POST");

$data = json_decode(file_get_contents("php://input"));


$query="UPDATE curdtbl set name='{$data->name}',
email='{$data->email}',pass='{$data->pass}' where id='{$data->id}';";

$res=mysqli_query($conn,$query);

if($res)
{
    echo json_encode(
        [
            "code"=>200,
            "status"=>true,
            "error"=>true,
            "Message"=>"Record Updated",
         
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
            "Message"=>"Record Not Updated",
            
        ],
        JSON_PRETTY_PRINT
        );   
}

?>