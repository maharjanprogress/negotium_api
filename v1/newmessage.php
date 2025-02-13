<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['id'])){
        $filtervalue=$_POST['id'];
        $query = "SELECT m.id FROM message m JOIN ( SELECT id, MAX(date) AS latest_date FROM message GROUP BY id ) AS latest_message ON m.id = latest_message.id AND m.date = latest_message.latest_date WHERE m.id=$filtervalue AND m.sentbyuser=0;";
        
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
          {
            $newmessage=true;
          }
          else{
            $newmessage=false;
          }
        $response['error']=false;
        $response['newmessage']=$newmessage;
    }
}
echo json_encode($response);