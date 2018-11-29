<?php
require_once('connect.php');
if(isset($_GET['id'])){
    $OrderID=$_GET['id'];
    $q="DELETE FROM `order` WHERE OrderID=$OrderID";
    if(!$mysqli->query($q)){
        echo"DELETE failed.Error".$mysqli->error;
    }
    
}
header('Location:order.php');
?>