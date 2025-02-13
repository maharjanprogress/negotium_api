<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['username']) and isset($_POST['email']) and isset($_POST['password']) and isset($_POST['phoneno'])
    ){
        $db = new DbOperations();
        $result = $db->createUser($_POST['username'],$_POST['password'],$_POST['email'],$_POST['phoneno']);
        if($result == 1){
            $response['error']=false;
            $response['message']="User registered sucessfully";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="User register unsucessful";
        }
        elseif($result == 0){
            $response['error']=true;
            $response['message']="The username or the email youre trying to access is already taken please try again...";
        }
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
else{
    $response['error']=true;
    $response['message']="Invalid Request";
}
echo json_encode($response);
