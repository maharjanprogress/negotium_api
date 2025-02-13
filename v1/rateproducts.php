<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['buyid']) AND isset($_POST['star']) AND isset($_POST['desc']) AND isset($_POST['productid']) AND isset($_POST['id'])){
        $db = new DbOperations();
        $result = $db->rateproduct($_POST['buyid'],$_POST['star'],$_POST['desc'],$_POST['productid'],$_POST['id']);
        if($result == 1){
            $response['error']=false;
            $response['message']="Product Rated Sucessful";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Product not Rated";
        }
        elseif($result == 3){
            $response['error']=true;
            $response['message']="Column isRated not Updated";
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