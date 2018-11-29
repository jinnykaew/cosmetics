<?php

    session_start();
    require 'connect.php';


    ?>
<!DOCTYPE html>
<html>
    <head>
    <title>  angle-Cosmetic </title>
</head>
<style>



td{
    border:1px solid white;
    border-collapse:collapse;
    text-align:center;
    padding-left: 50px;
    padding-right: 50px;
    font-family: inherit;
    font-size: 20px;
    border-bottom: 1px solid #ddd;
   }




th{
    background-color: #FFCCCC;
    /*font-family: inherit;*/
    font-size: 20px;
    text-align:center;

}

.image {
    height: 150px;
    object-fit: cover;
    float:left;


}

.total{
    padding-right: 50px;
    /*float:right;*/
    padding: 10px;
    font-size: 25px;


}

.low {

}


</style>
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
              <a href="1Home.php"><div style=" float: left; padding-left: 1000px; margin:1px; padding-top: 1px; font-family:inherit;;"> Home<img src="bag.png" width="20px" height="20px"> </div> </a>
              <a href="accountpage.php"><div style="padding-left: 1030px; padding-top: 1px; font-family:inherit;"> My Account <img src="user.png" width="20px" height="20px" ></div></a>

            </div><br>

    </header>
    <main>
    <div align="center" style = "font-size:30px">


<form name="form1" method="post" action=".php">
<?php
    if(!isset($_SESSION['productId'])){
        $_SESSION['productId'] =[];
        $_SESSION['productName'] =[];
        $_SESSION['Quantity'] =[];
        $_SESSION['Price'] =[];
        $_SESSION['TotalCost'] =[];
        //$_SESSION['image'] =[];
    }

    if(isset($_POST['products'])){
        foreach($_POST['products'] as $product){
            $duplicate = false;
            foreach($_SESSION['productId'] as $aProduct){
                if($aProduct==$product){
                    $duplicate = true;
                }

            }
            if(!$duplicate){
                $sql = "SELECT * FROM product WHERE ProductID = $product";
                $result = $mysqli->query($sql);
                $row = $result->fetch_assoc();
                $_SESSION['productId'][] = $product;
                $_SESSION['productName'][] = $row['ProductName'];
                $_SESSION['Quantity'][] = 1;
                $_SESSION['Price'][] = $row['Price'];
                $_SESSION['TotalCost'][] += $row['Price'];
                //$_SESSION['image'] = $row['image'];
            }



        }

    }

?>

<table>
    <tr>
        <th>PRODUCT</th>
        <th>QTY</th>
        <th>PRICE</th>
        <th>TOTAL</th>
        <th>REMOVE</th>
    </tr>

<?php

    if(isset($_SESSION['productId'])){
        $i = 0;
        //$total =  $_SESSION['TotalCost'][$i]+$_SESSION['Price'][$i];
        foreach($_SESSION['productId'] as $productID){

            ?>

                <tr>
                    <td><?php echo $_SESSION['productName'][$i]; ?></td>
                    <td><a href="minusQuantity.php?id=<?php echo $_SESSION['productId'][$i] ?>"><img src="minus16.png"></a><?php echo $_SESSION['Quantity'][$i] ?> <a href="addQuantity.php?id=<?php echo $_SESSION['productId'][$i] ?>"><img src="plus24.png"></a> </td>
                    <td><?php echo $_SESSION['Price'][$i] ?></td>
                    <td><?php echo $_SESSION['TotalCost'][$i] ?></td>
                    <td><?php echo '<a href= delcart.php?id='.$i.'><img width="20px" src = "./delete.png"></img>'; ?></td>
                </tr>

            <?php
            $i++;
        }

    }
    else{
        echo "YOUR SHOPPING BAG IS EMPTY";
        //echo '<a href= 1home.php> «CONTINUE SHOPPING </a>';


    }
    if (count($_SESSION['productId'])==0){
        echo "YOUR SHOPPING BAG IS EMPTY";
    } else {
        
    }
?>


</table>

    <div class= "total">


    <?php
    
 
  
   // if(!$countProduct){
         echo "Total Product $i <br>";
         echo "Shipping cost 0.00 baht<br>"
         //echo "Subtotal .$_SESSION['Quantity'][$i]. "<br>";
          //print("Estimate $total  baht");
    //}else{

    //  print("Total Product $countProduct <br>");
    //  print("Shipping cost 0.00 baht<br>");


     //echo "<hr>";
    //  print("Estimate total $totalPrice baht");

     ?>


     <p>
            <!--<div align="center">-->
         <a href= "1home.php" style = font-size:15px > «CONTINUE SHOPPING</a>
        <a href= "1payment.php" style = font-size:15px>CHECK OUT</a>


    </p>

    </div>
    </div>
    </main>
    </html>
