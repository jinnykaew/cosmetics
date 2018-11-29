<?php
require_once('connect.php');
session_start();
if(isset($_POST['submit'])){
$id=$_POST['userid'];
$name=$_POST['name'];
$message=$_POST['comment'];
$q="INSERT INTO feedback(userid,Name,message) VALUES ($_SESSION[ID],'$name','$message')";
$result=$mysqli->query($q);
if(!$result)
{
    echo"<br>Insert error-".$mysqli->error;
}
else{
        // header('location:login.php');
    echo"<script>
    alert('Thank you review')
    window.location = '1home.php'
    </script>";
}
}

?>