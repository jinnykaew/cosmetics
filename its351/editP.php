

<!DOCTYPE html>
<html>
   
    <style>
        .edit{
            text-align:center;
            font-family:Helvetica;
            font-size:20px;
            
        }
        h1{
            background-color:pink;
            font-size:30px;
            font-family:Helvetica;
        }
        </style>
<div class="edit">
    <h1> EDIT PRODUCT</h1>
<?php
require_once('connect.php');
session_start();
$ProductID=$_GET['id'];
$q="SELECT * FROM product WHERE ProductID=$ProductID";
$result=$mysqli->query($q);
//$row=$result->fetch_array();
//$mysqli->close();
echo"<form action='editproduct.php' method='POST'>";
    while($row=$result->fetch_array()){
            echo "<input type='hidden' name='id' value=".$_GET['id'].">";
            echo "Name: <br><input type='text' name='ProductName' value=".$row['ProductName']."><br>";
            echo "amount: <br><input type='text' name='Amount' value=".$row['amount']."><br>";
            echo "Type: <br><input type='text' name='Type' value=".$row['ProductType']."><br>";
            echo "Image: <br><input type='text' name='image' value=".$row['image']."><br><br>";
            echo "<input type='submit' name='update' value='Submit'><br>";
    }
    
echo"</form>";
?>
<div>
<html>