<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['productid']) AND isset($_POST['id']) AND isset($_POST['quantity'])
    ){
        $productid=explode(",",$_POST['productid']);
        $quantity=explode(",",$_POST['quantity']);
        $db = new DbOperations();
        $result = $db->deletewish($_POST['productid'],$_POST['id']);
        for ($i=0; $i < count($productid); $i++) {
            $result = $db->addtobuylist($productid[$i],$quantity[$i],$_POST['id']);
            if ($result==2) {
                break;
            }
        }

        
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