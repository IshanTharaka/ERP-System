<?php

$host = 'localhost:3306';
$root = 'root';
$password = '';
$database = 'erp_system';

try{
    $connect = mysqli_connect($host, $root, $password, $database);
}catch(Exception $e){
    $response = [
      'status' => 500,
      'message' => 'Internal Server Error - Database Connection Issue.'. mysqli_connect_error(),
    ];
    header("HTTP/1.0 500 Internal Server Error");
    echo json_encode($response);
    exit();
}

?>