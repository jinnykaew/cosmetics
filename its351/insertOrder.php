<?php
    require_once('connect.php');
    session_start();

    // $sql = "SELECT ID FROM address WHERE UserID=$_SESSION[ID]";
    // $result = $mysqli->query($sql);
    // $row = $result->fetch_assoc();
    
    $sql = "INSERT INTO `order` (AddId, UserID, status) VALUES ('$row[ID]', '$_SESSION[ID]', 'delivery')";
    $result = $mysqli->query($sql);
    $orderID = $mysqli->insert_id;
    if($result){
        $i = 0;
        foreach($_SESSION['productId'] as $productID){
            $currentID = $_SESSION['productId'][$i];
            $currentQuantity = $_SESSION['Quantity'][$i];
            $sql2 = "INSERT INTO `Order_Product` (OrderID, ProductID, Quantity) VALUES ($orderID, $currentID, $currentQuantity)";
            $result2 = $mysqli->query($sql2);
            if(!$result2){
                echo $mysqli->error;
            }
            $i++;
        }

    } else {
        echo $mysqli->error;
    
    }
    header('Location:1finish.php');

        
?>