<?php
require_once('connect.php');
if(isset($_GET['id'])){
    $ProductID=$_GET['id'];
    $q="DELETE FROM product WHERE ProductID=$ProductID";
    if(!$mysqli->query($q)){
        echo"DELETE failed.Error".$mysqli->error;
    }
}
header('Location:showP.php');