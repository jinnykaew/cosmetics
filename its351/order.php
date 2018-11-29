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
        <th>OrderID</th>
        <th>AddID</th>
        <th>UserID</th>
        <th>status</th>
        <th>TrackingNO.</th>
    </tr>
<?php
require_once('connect.php');
$q="SELECT * FROM `order` ORDER BY OrderID";
echo '<a href = "3adminhome.php">FINISH!</a>';
if($result=$mysqli->query($q)){
    while($row=$result->fetch_array()){
        
        echo "<tr>";
        echo "<td>".$row['OrderID']."</td>";
        echo "<td>".$row['AddID']."</td>";
        echo "<td>".$row['UserID']."</td>";
        echo "<td>".$row['status']."</td>";
        echo "<td>".$row['trackingNo']."</td>";
        echo "<td>".'<a href="editorder.php?id='.$row['OrderID'].'"> Edit </a></td>'; 
        echo "<td><a href='delorder.php?id=$row[OrderID]'>Delete</a></td>";
        echo "</tr>";
    }
    echo"</table>";
}
$mysqli->close();
?>

</table>
</html>
