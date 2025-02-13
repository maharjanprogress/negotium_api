<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$id = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(
        isset($_POST['isbought']) AND isset($_POST['buydate']))
    {
        $filter = $_POST['buydate'];
        $query = "SELECT * FROM `buylist` WHERE buydate LIKE '$filter' AND bought = 0 GROUP BY id;";
    
        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result)>0)
        {
          while($row = mysqli_fetch_assoc($result)){
              $id[]=$row['id'];
          }
        }
        $db = new DbOperations();
        if ($_POST['isbought']=="1") {
            $text="your placed order of product in ".$filter.", has been delivered";
            for ($i=0; $i < count($id); $i++) {
                $result = $db->insertmessageadmin($text,$id[$i]);
            }
            
            $result = $db->updateitem($_POST['buydate']);
        }
        else{
            $text="your placed order of product in ".$filter.", has been denied for delivery";
            for ($i=0; $i < count($id); $i++) {
                $result = $db->insertmessageadmin($text,$id[$i]);
            }
            $result = $db->deleteitem($_POST['buydate']);
        }
        if($result == 1){
            $response['error']=false;
            $response['message']="Task sucessfully";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Task unsucessful";
        }
    }elseif (isset($_POST['isbought']) AND isset($_POST['id'])) {
        $oid = $_POST['id'];
        $db = new DbOperations();
        if ($_POST['isbought']=="1") {
            $text="All of your ordered product has been delivered";
            $result = $db->insertmessageadmin($text,$oid);
            
            $result = $db->updateitemuser($oid);
        }
        else{
            $text="All of your ordered product has been denied for delivery";
            $result = $db->insertmessageadmin($text,$oid);
            $result = $db->deleteitemuser($oid);
        }
        if($result == 1){
            $response['error']=false;
            $response['message']="Task sucessfully";
        }
        elseif($result == 2){
            $response['error']=true;
            $response['message']="Task unsucessful";
        }
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
else{
    $response['error']=true;
    $response['message']="Invalid Request";
}
echo json_encode($response);