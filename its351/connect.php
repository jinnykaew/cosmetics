<?php
$mysqli=new mysqli('localhost','root','','cosmetic');
if($mysqli->connect_errno)
{
    echo "Connection Failed";
}
?>