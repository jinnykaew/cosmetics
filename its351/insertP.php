
<?php
require_once('connect.php');
$ProductName = $_POST['Product_name'];
$ProductPrice = $_POST['Product_price'];
$Detail = $_POST['detail'];
$Amount = $_POST['amount'];
$Image = $_POST['image'];
$ProductType = $_POST['Product_type'];

$q= "INSERT INTO product(ProductName,Price,Detail,amount,image,ProductType)
    VALUES('$ProductName','$ProductPrice','$Detail','$Amount','$Image ','$ProductType');";
$result=$mysqli->query($q);
if(!$result){
    echo "<br> INSERT ERROR ".$mysqli->error;
}
else{
    header('Location:showP.php');
}
$mysqli->close();

?>
