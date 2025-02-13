<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['productid']) AND isset($_POST['id']) AND isset($_POST['quantity'])
    ){
        $db = new DbOperations();
        $result = $db->addtobuylist($_POST['productid'],$_POST['quantity'],$_POST['id']);
        if($result == 1){
            $response['error']=false;
            $response['message']="You will be getting a call soon";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="You are not able to buy the products";
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