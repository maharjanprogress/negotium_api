<?php
include "db_connect.php";
require_once'../includes/DbOperations.php';
$response = array();
$subcate = array();
$pic = array();
if($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST['subcate'])){
      $filtervalues = $_POST['subcate'];
            $query = "SELECT DISTINCT subcate,pic FROM product where category LIKE '%$filtervalues%' GROUP BY subcate";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result)>0)
              {
                while($row = mysqli_fetch_assoc($result)){
                    $subcate[]=$row['subcate'];
                    $pic[] = $row['pic'];
                }
              }

            $response['error']=false;
            $response['subcate']=$subcate;
            $response['pic']=$pic;
        
    }else{
        $response['error'] = true;
        $response['message']="Required fields are missing";
    }
}
echo json_encode($response);