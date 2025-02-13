<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$buyid = array();
$id = array();
$productid = array();
$quantity = array();
$username = array();
$phoneno = array();
$product_name = array();
$pic = array();
$totalprice = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['buydate'])){
            $filtervalues = $_POST['buydate'];
            $query = "SELECT buylist.buyid,buylist.id,buylist.productid,buylist.quantity, users.username, users.phoneno, product.product_name,product.pic,product.price*buylist.quantity AS totalprice FROM buylist INNER JOIN users ON buylist.id = users.id INNER JOIN product ON buylist.productid=product.productid WHERE buylist.buydate LIKE '$filtervalues' AND buylist.bought = 0;";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)){
                    $buyid[]=$row['buyid'];
                    $id[]=$row['id'];
                    $productid[]=$row['productid'];
                    $quantity[]=$row['quantity'];
                    $username[]=$row['username'];
                    $phoneno[]=$row['phoneno'];
                    $product_name[]=$row['product_name'];
                    $pic[]=$row['pic'];
                    $totalprice[]=$row['totalprice'];
                }
              }
            $response['error']=false;
            $response['buyid']=$buyid;
            $response['id']=$id;
            $response['productid']=$productid;
            $response['quantity']=$quantity;
            $response['username']=$username;
            $response['phoneno']=$phoneno;
            $response['product_name']=$product_name;
            $response['pic']=$pic;
            $response['totalprice']=$totalprice;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);