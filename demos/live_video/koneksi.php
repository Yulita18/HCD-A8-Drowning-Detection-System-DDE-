<?php
$db_con = mysqli_connect("localhost","root","","sman2");
 
$response = array();
header('Content-Type: application/json');
 
if(mysqli_connect_errno())
{
    $response["error"] = TRUE;
    $response["message"] ="Faild to connect to database";
    echo json_encode($response);
    exit;
}
 ?>