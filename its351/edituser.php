<?php
require_once('connect.php');
$id=$_POST['id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['email'];
$telephone=$_POST['telephone'];
$q="UPDATE user SET email='$username',firstname='$firstname',lastname='$lastname' ,telephone='$telephone'WHERE id='$_POST[id]'";
if($result=$mysqli->query($q)){
    header("Location:showU.php");
}
else{
    echo"<script>
    alert('Failed!')
    window.location = './editU.php'
</script>";
}
$mysqli->close();
?>