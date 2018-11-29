<?php
/*
// session_start();
require_once('connection.php');
include('1Home.php');
include('showcart.php');


if(!isset($_SESSION['products']))
{
    
}
else{
    $numcd=$_COOKIE['products'];
}
for($a=0;$a<$numpd;$a++)
{
    setcookie("cart[$a]","");
    setcookie("price[$a]","");
} 


*/


session_start();
require 'connect.php';

array_splice($_SESSION['productId'], $_GET['id'], 1);
array_splice($_SESSION['productName'], $_GET['id'], 1);
array_splice($_SESSION['Quantity'], $_GET['id'], 1);
array_splice($_SESSION['Price'], $_GET['id'], 1);
array_splice($_SESSION['TotalCost'], $_GET['id'], 1);

header("Location: showcart.php");


?>






 <!DOCTYPE html>
<html>
    <head>
    <title>  angle-Cosmetic </title>
</head>

<body>
<link rel="stylesheet" href="stylehome.css">
<form name="form1" method="post" action="addbasket.php">
    <header>

<p class="free">- FREE SHIPPING -</p>
<div class="rose">
    <img src="rose.png" width="50px" height="70px" style="float:left; margin:1px 4px;">
</div>
    <h1>ANGEL COSMETIC</h1><br>

            <div class="topnav-right">
              <a href="showcart.php"><div style=" float: left; padding-left: 990px; margin:1px; padding-top: 1px; font-family:inherit;;"> Shopping Cart <img src="bag.png" width="20px" height="20px"> </div> </a>
              <a href="account.html"><div style="padding-left: 1130px; padding-top: 1px; font-family:inherit;"> My Account <img src="user.png" width="20px" height="20px" ></div></a>

            </div><br>

    </header>
    <main>
    <div align="center" style = "font-size:30px">
<?php
setcookie("numcd","");
print("you have cancelled all the order in cart");
?>
<br>
<a href="1home.php" style = font-size:16px >«CONTINUE SHOPPING</a>
</div>
    </main>
    </html>