<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['productid'])){
        $db = new DbOperations();
        $result = $db->deleteProduct($_POST['productid']);
        if($result == 1){
            $response['error']=false;
            $response['message']="Product deleted Sucessful";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Product not deleted";
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