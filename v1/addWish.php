<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['productid']) and isset($_POST['id']) and isset($_POST['quantity'])
    ){
        $db = new DbOperations();
        $result = $db->postwish($_POST['productid'],$_POST['id'],$_POST['quantity']);
        if($result == 1){
            $response['error']=false;
            $response['message']="wishlist added";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="wishlist not added";
        }
        elseif($result == 0){
            $response['error']=false;
            $response['message']="Product wish Updated";
        }
        elseif($result == 3){
            $response['error']=true;
            $response['message']="something thats meant to happen didnt happen";
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