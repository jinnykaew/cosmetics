<?php
/*require_once('connect.php');
$id=$_POST['id'];
$UserID=$_POST['User'];
$AddID=$_POST['addid'];
$status=$_POST['status'];
$trackingNo=$_POST['trackingNo'];
$q="UPDATE `order` SET AddID=$AddID,UserID=$UserID,status='$status',trackingNo='$trackingNo' WHERE id='$_POST[OrderID]'";
if($result=$mysqli->query($q)){
    header("Location:order.php");
}
else{
    echo"<script>
    alert('Failed!')
    window.location = './editorder.php'
</script>";
}
$mysqli->close();*/

require_once('connect.php');
$AddID=$_POST['AddID'];
$UserID=$_POST['UserID'];
$status=$_POST['status'];
$trackingNo=$_POST['trackingNo'];

$q="UPDATE `order` SET AddID='$AddID',UserID='$UserID',status='$status',trackingNo=$trackingNo
WHERE OrderID='$_POST[id]'";
if($result=$mysqli->query($q)){
    header("Location:order.php");
}
else{
    echo"<script>
    alert('Failed!')
    window.location = './editorder.php?id=".$_POST['id']."'
</script>";
// echo $mysqli->error;
}
$mysqli->close();

?>