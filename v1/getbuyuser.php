<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$username = array();
$phoneno = array();
$id = array();

$buydate1 = array();
$buyid = array();
$id1 = array();
$productid = array();
$quantity = array();
$username1 = array();
$phoneno1 = array();
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
            $id1[]=$row['id'];
            $productid[]=$row['productid'];
            $quantity[]=$row['quantity'];
            $username1[]=$row['username'];
            $phoneno1[]=$row['phoneno'];
            $product_name[]=$row['product_name'];
            $pic[]=$row['pic'];
            $totalprice[]=$row['totalprice'];
        }
      }
    $response['buyid']=$buyid;
    $response['buydate1']=$buydate1;
    $response['id1']=$id1;
    $response['productid']=$productid;
    $response['quantity']=$quantity;
    $response['username1']=$username1;
    $response['phoneno1']=$phoneno1;
    $response['product_name']=$product_name;
    $response['pic']=$pic;
    $response['totalprice']=$totalprice;

    $query = "SELECT DISTINCT buylist.id,users.username,users.phoneno FROM buylist INNER JOIN users ON users.id=buylist.id WHERE bought = 0;";
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result)){
            $username[]=$row['username'];
            $phoneno[]=$row['phoneno'];
            $id[]=$row['id'];
        }
    }
    $response['error']=false;
    $response['username']=$username;
    $response['phoneno']=$phoneno;
    $response['id']=$id;
        
}
echo json_encode($response);