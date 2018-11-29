<!DOCTYPE html>
<html>
   
    <style>
        .edit{
            text-align:center;
            font-family:Helvetica;
            font-size:16px;
            
        }
        h1{
            background-color:pink;
            font-size:30px;
            font-family:Helvetica;
        }
        </style>
<div class="edit">
    <h1> EDIT ORDER</h1>
<?php
require_once('connect.php');
//session_start();
$OrderID=$_GET['id'];
$q="SELECT * FROM `order` WHERE OrderID=$OrderID";
$result=$mysqli->query($q);
//$row=$result->fetch_array();
//$mysqli->close();
echo"<form action='editorderr.php' method='POST'>";
    while($row=$result->fetch_array()){
        echo"<tr>";
        echo"<input type='hidden' name='id' value=".$row['OrderID']."><br>";
        echo"AddID:<input name=AddID value=".$row['AddID']."><br>";
        echo"UserID:<input name=UserID value=".$row['UserID']."><br>";
        echo"status:<input name=status value=".$row['status']."><br>";
        echo"TrackingNo:<input name=trackingNo value=".$row['trackingNo']."><br><br>";
        echo"<input type='submit' name='update' value='Submit'><br><br>";
        echo"<a href='order.php'>BACK TO ORDER PAGE</a><br>";
        echo"</tr>";
    }
echo"</form>";
?>
<div>
<html>