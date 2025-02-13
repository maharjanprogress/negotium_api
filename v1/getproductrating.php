<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$username = array();
$desc = array();
$rating = array();
$date = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['productid'])){
            $filtervalues = $_POST['productid'];
            $query = "SELECT review.*, users.username AS username FROM review LEFT JOIN users ON review.id = users.id WHERE productid=$filtervalues;";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)){
                    $username[]=$row['username'];
                    $desc[]=$row['description'];
                    $rating[]=$row['star'];
                    $date[]=$row['day'];
                }
              }
            $response['error']=false;
            $response['username']=$username;
            $response['desc']=$desc;
            $response['rating']=$rating;
            $response['date']=$date;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);