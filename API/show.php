<?php


require_once 'conn.php';

header("Content-type:application/Json");
header("Access-Control-Allow-Origin:*");
header("Access-Control-Allow-Method:GET");

$data = json_decode(file_get_contents("php://input"));

$query="SELECT *FROM curdtbl";
$res=mysqli_query($conn,$query);
$output=mysqli_fetch_all($res,MYSQLI_ASSOC);
if(mysqli_num_rows($res)>0)
{
    echo json_encode(
        [
            "code"=>200,
            "status"=>true,
            "Message"=>"Record Found",
            "Data"=>$output,
        ],
        JSON_PRETTY_PRINT //to print formetted
        );
}
else{
 
    echo json_encode(
        [
            "code"=>200,
            "status"=>true,
            "Message"=>"Record Found",
            "Data"=>[],
        ],
        JSON_PRETTY_PRINT
        );   
}

?>