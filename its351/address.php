<?php
require_once('connect.php');
session_start();

$userid=$_SESSION['ID'];
$address=$_POST['address'];
$city=$_POST['city'];
$state=$_POST['state'];
$zip=$_POST['zip'];

if(isset($_POST['add'])){

    $check1="INSERT INTO address(userid,Address,city,state,zip) VALUES($_SESSION[ID],'$address','$city','$state','$zip')";
    $row=$mysqli->query($check1);
    if($row)
        {
        echo"<script>
        alert('Complete')
        window.location = './accountpage.php'
        </script>";
        }
    else{
        // echo"<script>
        // alert('Fail')
        // window.location = './setting.php'
        // </script>";
        echo $mysqli->error;
    }
    
}  
else{
    if(isset($_POST['save'])){
    $q="UPDATE address SET Address='$address', city='$city', state='$state', zip='$zip' WHERE userid=$userid";
    $result=$mysqli->query($q);
        if($result){
        echo"<script>
                alert('update success!')
                window.location = './accountPage.php'
            </script>";
        }
        else{
            mysqli_error($q);
        }
    }
    else{
        echo"<script>
        alert('Fail!')
        window.location = './setting.php'
        </script>";

    }

}



?>