<?php
    $username="root";
    $password="";
    $server="localhost";
    $db="android";

    $con=mysqli_connect($server,$username,$password,$db);

    if(!$con){
        die("Connection failed: ".mysqli_connect_error());
    }
?>