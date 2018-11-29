<?php
session_start();
require_once('connect.php');
include('login.php');


//if(isset($_POST['login'])){
$username=$_POST['username'];
$password=$_POST['psw'];
$q="SELECT * FROM user WHERE email = '$username'";
$result=$mysqli->query($q);
$count_no_row = $result->num_rows;
if($count_no_row >= 1){
    $row = $result->fetch_assoc();
    if($row['password']==$password){
        $_SESSION['username'] = $username;
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['email'] = $row['email'];
        //echo"Log in success!";
        echo"<script>
                alert('Log in success!')
                window.location = './1home.php'
            </script>";
    } else {
        echo"<script>
                alert('Wrong Username or Password!')
                window.location = './login.php'
            </script>";
    }
        
} else {
    $result=$mysqli->query("SELECT * FROM admin WHERE Email = '$username'");
    $count_no_row = $result->num_rows;
    if($count_no_row >= 1){
        $row = $result->fetch_assoc();
        if($row['Password']==$password){
            $_SESSION['username'] = $username;
            $_SESSION['ID'] = $row['AdminID'];
            $_SESSION['firstname'] = $row['Firstname'];
            $_SESSION['lastname'] = $row['Lastname'];
            $_SESSION['email'] = $row['Email'];
            //echo"Log in success!";
            echo"<script>
                alert('Log in success!')
                window.location = './3adminhome.php'
            </script>";
        } else {
            echo"<script>
                alert('Wrong Username or Password!')
                window.location = './login.php'
            </script>";
        }
    } else {
        echo"<script>
            alert('Your email did not exist')
            window.location = './login.php'
        </script>";
    }
}



?>