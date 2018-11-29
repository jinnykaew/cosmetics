<!DOCTYPE html>
<html>
<style>
    table{
        border:2px outset pink ;
    }
    td{
        border:thin inset pink;
    }
</style>
    <div class="rose">
		<img src="rose.png" width="50px" height="70px" style="float:left;">
		<a  href="3adminhome.php"><h1>ANGEL COSMETIC</h1></a>
		</div>
<table>
    <tr>
        <th>ProductID</th>
        <th>ProductName</th>
        <th>Price</th>
        <th>Amount</th>
        <th>ProductType</th>
        <th>Image</th>
    </tr>
<?php
    require_once('connect.php');
    $q="SELECT * FROM product";
    if($result=$mysqli->query($q)){
        while($row=$result->fetch_array()){
            echo "<tr>";
            echo "<td>".$row['ProductID']."</td>";
            echo "<td>".$row['ProductName']."</td>";
            echo "<td>".$row['Price']."</td>";
            echo "<td>".$row['amount']."</td>";
            echo "<td>".$row['ProductType']."</td>";
            echo "<td><img src='$row[image]' width='40'></td>";
            echo "<td>".'<a href="editP.php?id='.$row['ProductID'].'"> Edit </a></td>'; 
            echo "<td>".'<a href="delP.php?id='.$row['ProductID'].'"> Delete </a></td>'; 
            echo "</tr>";
        }
    }
    
?>
<?php
    $mysqli->close();
?>
<a href ="insert_form.php"> Add More Product!</a> 
<a href ="3adminhome.php"> finish </a>

</table>
</html>