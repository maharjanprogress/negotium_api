<?php
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['product_name']) and isset($_POST['category']) and isset($_POST['subcate']) and isset($_POST['price']) and isset($_POST['pic']) and isset($_POST['description']) and isset($_POST['producer'])
    ){
        $db = new DbOperations();
        $result = $db->postProduct($_POST['product_name'],$_POST['category'],$_POST['subcate'],$_POST['price'],$_POST['product_name'],$_POST['description'],$_POST['producer']);
        if($result == 1){
            $imagename = $_POST['product_name'];
            $imagedata = $_POST['pic'];
            $path="../productpic/$imagename.jpg";
            file_put_contents($path,base64_decode($imagedata));
            $response['error']=false;
            $response['message']="Product inserted Sucessful";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Product not inserted";
        }
        elseif($result == 0){
            $response['error']=true;
            $response['message']="Product is already there";
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
