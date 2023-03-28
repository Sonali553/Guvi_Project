<?php
session_start();

require 'useractions.php';

header('Content-Type: application/json; charset=utf-8');

$response = ['success'=>true , 'message'=>'User details fetched successfully !'];

if(isset($_SESSION['loggedin'])){
    $user = $_SESSION['email'];
    unset($user['password']);
    $response['user'] = $user;
}else{
    $response['success'] = false;
    $response['message'] = 'Not loggedIN !';
}

echo json_encode($response);
?>