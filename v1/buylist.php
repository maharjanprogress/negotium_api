<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$total_value = array();
$product_name = array();
$pic = array();
$producer = array();
$quantity = array();
$productid = array();
$buyid = array();
$price = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['id']) and isset($_POST['bought'])){
            $filtervalues = $_POST['id'];
            $bout = $_POST['bought'];
            if(isset($_POST['rated'])){
              $query = "SELECT *,DATEDIFF(deliverydate, buydate) AS totaldays, price * quantity AS totalvalue FROM product INNER JOIN buylist ON product.productid=buylist.productid where id LIKE '$filtervalues' AND bought = $bout AND israted = 0;";
            }else{
              $query = "SELECT *,DATEDIFF(deliverydate, buydate) AS totaldays, price * quantity AS totalvalue FROM product INNER JOIN buylist ON product.productid=buylist.productid where id LIKE '$filtervalues' AND bought = $bout;";
            }
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)){
                    $buyid[]=$row['buyid'];
                    $productid[]=$row['productid'];
                    $product_name[]=$row['product_name'];
                    $pic[]=$row['pic'];
                    $israted[]=$row['israted'];
                    $buydate[]=$row['buydate'];
                    $quantity[]=$row['quantity'];
                    $totalvalue[]=$row['totalvalue'];
                    $totaldays[]=$row['totaldays'];
                }
              }
            $query = "SELECT SUM(price * quantity) AS totallvalue FROM product INNER JOIN buylist ON product.productid=buylist.productid where id LIKE '$filtervalues' AND bought = $bout;";
            $result = mysqli_query($con,$query);
            $row = mysqli_fetch_assoc($result);
            $response['error']=false;
            $response['finalvalue']=$row['totallvalue'];
            $response['buyid']=$buyid;
            $response['productid']=$productid;
            $response['product_name']=$product_name;
            $response['pic']=$pic;
            $response['israted']=$israted;
            $response['buydate']=$buydate;
            $response['quantity']=$quantity;
            $response['totaldays']=$totaldays;
            $response['totalvalue']=$totalvalue;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);