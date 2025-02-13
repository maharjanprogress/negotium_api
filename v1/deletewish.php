<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['productid']) AND isset($_POST['id'])
    ){
        $db = new DbOperations();
        $result = $db->deletewish($_POST['productid'],$_POST['id']);
        if($result == 1){
            $response['error']=false;
            $response['message']="Cart cancelled sucessfully";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Cart couldnt be cancelled";
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