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
$categoryy = array();
$rating = array();
$count = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['search'])){
      $filtervalues = $_POST['search'];
            $query = "SELECT product.*,AVG(review.star) AS rating FROM product LEFT JOIN review ON product.productid = review.productid where product.product_name LIKE '%$filtervalues%' GROUP BY product.productid";
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
              $query = "SELECT DISTINCT category FROM product where category LIKE '%$filtervalues%' ";
              $result = mysqli_query($con,$query);
              if(mysqli_num_rows($result)>0)
                {
                  while($row = mysqli_fetch_assoc($result)){
                      $categoryy[]=$row['category'];
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
            $response['categoryy']=$categoryy;
        
    }
    elseif(isset($_POST['productid'])){
      $filtervalues = $_POST['productid'];
            $query = "SELECT product.*,COUNT(review.star) AS count,AVG(review.star) AS rating FROM product LEFT JOIN review ON product.productid = review.productid where product.productid LIKE '$filtervalues' GROUP BY product.productid";
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
                    $count[]=$row['count'];
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
            $response['count']=$count;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);