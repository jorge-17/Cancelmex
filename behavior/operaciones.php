<?php
error_reporting(E_ALL ^ E_NOTICE);
 $con=mysqli_connect("localhost","root","","calcelmex");
// Check connection
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

$action=$_GET['action'];
switch($action){
    case "fijos_2y3":

        $result=mysqli_query($con,"SELECT price")
        break;
}

?>
