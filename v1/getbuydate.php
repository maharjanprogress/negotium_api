<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$buydate = array();

$buydate1 = array();
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

    $query = "SELECT buylist.buyid,buylist.id,buylist.productid,buylist.quantity,buylist.buydate, users.username, users.phoneno, product.product_name,product.pic,product.price*buylist.quantity AS totalprice FROM buylist INNER JOIN users ON buylist.id = users.id INNER JOIN product ON buylist.productid=product.productid WHERE buylist.bought = 0;";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result)){
            $buyid[]=$row['buyid'];
            $buydate1[]=$row['buydate'];
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
    $response['buyid']=$buyid;
    $response['buydate1']=$buydate1;
    $response['id']=$id;
    $response['productid']=$productid;
    $response['quantity']=$quantity;
    $response['username']=$username;
    $response['phoneno']=$phoneno;
    $response['product_name']=$product_name;
    $response['pic']=$pic;
    $response['totalprice']=$totalprice;

    $query = "SELECT DISTINCT buydate FROM buylist WHERE bought = 0;";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result)){
            $buydate[]=$row['buydate'];
        }
    }
    $response['error']=false;
    $response['buydate']=$buydate;
        
}
echo json_encode($response);