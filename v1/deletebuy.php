<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['productid']) AND isset($_POST['id'])
    ){
        $db = new DbOperations();
        $result = $db->deletebuy($_POST['productid'],$_POST['id']);
        if($result == 1){
            $response['error']=false;
            $response['message']="product cancelled sucessfully";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="product couldnt be cancelled";
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