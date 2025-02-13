<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$productid = array();
$product_name = array();
$category = array();
$subcate = array();
$price = array();
$pic = array();
$description = array();
$producer = array();
$rating = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['search'])){
      $filtervalues = $_POST['search'];
      
            $query = "SELECT product.*,AVG(review.star) AS rating FROM product LEFT JOIN review ON product.productid = review.productid where product.subcate LIKE '$filtervalues' GROUP BY product.productid";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)){
                    $productid[]=$row['productid'];
                    $product_name[]=$row['product_name'];
                    $category[]=$row['category'];
                    $subcate[]=$row['subcate'];
                    $price[]=$row['price'];
                    $pic[]=$row['pic'];
                    $description[]=$row['description'];
                    $producer[]=$row['producer'];
                    $rating[]=$row['rating'];
                }
              }
            $response['error']=false;
            $response['productid']=$productid;
            $response['product_name']=$product_name;
            $response['category']=$category;
            $response['subcate']=$subcate;
            $response['price']=$price;
            $response['pic']=$pic;
            $response['description']=$description;
            $response['producer']=$producer;
            $response['rating']=$rating;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);