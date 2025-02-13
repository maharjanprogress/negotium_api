<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['isbought']) AND isset($_POST['buyid']))
    {
        $filter = $_POST['buyid'];
        $query = "SELECT buylist.*,product.product_name FROM `buylist` INNER JOIN product ON buylist.productid=product.productid WHERE buyid = $filter;";
    
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_assoc($result)){
              $id=$row['id'];
              $productname=$row['product_name'];
              $buydate=$row['buydate'];
              $quantity=$row['quantity'];
          }
        }
        $db = new DbOperations();
        if ($_POST['isbought']=="1") {
            
            $result = $db->updatesubitem($_POST['buyid'],$id,$productname,$buydate,$quantity);
        }
        else{
            $result = $db->deletesubitem($_POST['buyid'],$id,$productname,$buydate,$quantity);
        }
        if($result == 1){
            $response['error']=false;
            $response['message']="Task sucessfully";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Task unsucessful";
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