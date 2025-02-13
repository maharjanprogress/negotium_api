<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$id = array();
$text = array();
$isseen = array();
$isseen = array();
$isseenuser = array();
$date = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['id'])){
        $filterid=$_POST['id'];
        $query = "SELECT *,DATE_FORMAT(date, '%Y-%m-%d %H:%i') AS datetime FROM `message` WHERE id=$filterid;";
        
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
          {
            while($row = mysqli_fetch_assoc($result)){
                $id[]=$row['id'];
                $text[]=$row['text'];
                $isseen[]=$row['isseen'];
                $isseenuser[]=$row['isseenuser'];
                $sentbyuser[]=$row['sentbyuser'];
                $date[]=$row['datetime'];
            }
          }
        $db = new DbOperations();
        $result = $db->updateadminseen($_POST['id']);
        if($result==1){
            $response['error']=false;
        }
        else{
            $response['error']=true;
        }
        $response['id']=$id;
        $response['text']=$text;
        $response['isseen']=$isseen;
        $response['isseenuser']=$isseenuser;
        $response['date']=$date;
        $response['sentbyuser']=$sentbyuser;

    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
        
}
echo json_encode($response);