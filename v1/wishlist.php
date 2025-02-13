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
$price = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['id'])){
      $filtervalues = $_POST['id'];
            $query = "SELECT *,price * quantity AS total_value FROM product INNER JOIN wishlist ON product.productid=wishlist.productid where id LIKE '$filtervalues' ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)){
                    $productid[]=$row['productid'];
                    $product_name[]=$row['product_name'];
                    $pic[]=$row['pic'];
                    $producer[]=$row['producer'];
                    $price[]=$row['price'];
                    $quantity[]=$row['quantity'];
                    $total_value[]=$row['total_value'];
                }
              }
            $response['error']=false;
            $response['productid']=$productid;
            $response['product_name']=$product_name;
            $response['pic']=$pic;
            $response['price']=$price;
            $response['quantity']=$quantity;
            $response['producer']=$producer;
            $response['total_value']=$total_value;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);