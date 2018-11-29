<?php 
require 'connect.php';
session_start();
$index;
$i=0;
foreach($_SESSION['productId'] as $value){
    if($_SESSION['productId'][$i]==$_GET['id']){
        $index = $i; 
    }
    $i++;
}

$_SESSION['Quantity'][$index] = $_SESSION['Quantity'][$index]+1;
$_SESSION['TotalCost'][$index] = $_SESSION['TotalCost'][$index]+$_SESSION['Price'][$index];

header('Location: showcart.php');

?>