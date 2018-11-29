<?php 

session_start();

foreach($_POST['products'] as $value) {
    if(!isset($_SESSION['product_id'])){
        $_SESSION['product_id'] = [];
    }
    $_SESSION['product_id'][] = $value;
}

header("Location: ".$_GET['nextPage'].".php")

?>