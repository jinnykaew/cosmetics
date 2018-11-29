<?php
require_once('connect.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $q="DELETE FROM user WHERE ID=$id";
    if(!$mysqli->query($q)){
        echo"DELETE failed.Error".$mysqli->error;
    }
}
header('Location:showU.php');

/*$id=$_GET['ID'];
$q="DELETE FROM user WHERE ID='$id'";
if($result=$mysqli->query($q)){
    header("Location:showU.php");
}
else{
    echo"<script>
    alert('Delete failed!')
    window.location = './showU.php'
    </script>";
}
$mysqli->close();*/
?>