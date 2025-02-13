<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$id = array();
$text = array();
$isseen = array();
$isseen = array();
$username = array();
$phoneno = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    $query = "SELECT m.id, m.text, m.isseen, m.sentbyuser,users.username,users.phoneno FROM message m JOIN ( SELECT id, MAX(date) AS latest_date FROM message GROUP BY id ) AS latest_message ON m.id = latest_message.id AND m.date = latest_message.latest_date INNER JOIN users ON m.id=users.id;";
    
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0)
      {
        while($row = mysqli_fetch_assoc($result)){
            $id[]=$row['id'];
            $text[]=$row['text'];
            $isseen[]=$row['isseen'];
            $sentbyuser[]=$row['sentbyuser'];
            $username[]=$row['username'];
            $phoneno[]=$row['phoneno'];
        }
      }
    $response['error']=false;
    $response['id']=$id;
    $response['text']=$text;
    $response['isseen']=$isseen;
    $response['sentbyuser']=$sentbyuser;
    $response['username']=$username;
    $response['phoneno']=$phoneno;
        
}
echo json_encode($response);