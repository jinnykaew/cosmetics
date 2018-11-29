<?php
require_once('connect.php');
$ProductName=$_POST['ProductName'];
$amount=$_POST['Amount'];
$ProductType=$_POST['Type'];
$q="UPDATE product SET ProductName='$ProductName',amount='$amount',ProductType='$ProductType' WHERE ProductID='$_POST[id]'";
if($result=$mysqli->query($q)){
    header("Location:showP.php");
}
else{
    echo"<script>
    alert('Failed!')
    window.location = './editP.php?id=".$_POST['id']."'
</script>";
// echo $mysqli->error;
}
$mysqli->close();
?>