<?php
session_start();
require_once('connect.php');
$userid=$_SESSION['ID'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$q="UPDATE user SET firstname='$firstname',lastname='$lastname',email='$email' WHERE ID='$userid'";
$result=$mysqli->query($q);
if($result){
    echo"<script>
    alert('success!')
    window.location = './accountPage.php'
    </script>";
}
else{
    echo"<script>
    alert('Fail!')
    window.location = './setting.php'
    </script>";
}
$mysqli->close();
?>
