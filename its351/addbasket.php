<?php
 $musiccd =$_POST['musiccd'];

 if(!isset($_COOKIE['numcd']))
 {  
     $numcd=0;
 }
 else{
     $numcd=$_COOKIE['numcd'];
 }

 setcookie("cart[$numcd]",$musiccd);
 $pr=0;
 switch($musiccd)
 {
     case "chanel" :$pr=1399;break;
     case "3ce":$pr=490;break;
     case "powder" :$pr=359;break;
     case "Translucent": $pr=280;break;
     case "MagicMatte" :$pr=129;break;
     case "TranslucentP" :$pr=359;break;
     case "SheerShimmer" :$pr=159;break;
     case "3CETriple" :$pr=490;break;
     case "LovelyCookie":$pr=260;break;
     case "Sixteen" :$pr=590;break;
     case "Maybelline" :$pr=549;break;
     case "Urban":$pr=2450;break;
     case "ChanelLip":$pr=1399;break;
     case "LuxeMatteLip":$pr=1450;break;
     case "PowerkissLip":$pr=880;break;
 }
 setcookie("price[$numcd]",$pr);
 $numcd++;

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
 setcookie("numcd",$numcd);
 print("you pick $musiccd in to the basket<br>");
 ?>

 <a href="home.html">continue shopping</a>
 <a href="showcart.php">show cart</a>
 <a href="delcart.php"> delete cart</a>

     </div>
    </main>
    </html>
