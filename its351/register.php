<?php
require_once('connect.php');
if(isset($_POST['signup'])){
$firstname=$_POST['first'];
$lastname=$_POST['last'];
$email=$_POST['email'];
$password=$_POST['psw'];
$choose=$_POST['choose'];


//$pass=$_POST['psw-repeat'];
$error=array();

$user_check_query = "SELECT * FROM user WHERE email='$email'";
  $result = $mysqli->query($user_check_query);
  
  if ($result) { // if user exists
    while($row = $result->fetch_assoc()){ 
      if ($row['email'] == $email) {
        //array_push($errors, "email already exists");
        echo"<script>
        alert('email already exist!')
        window.location = 'login.php'
        </script>";
      }
      
      
    }
    if($choose=="1")
      {$q="INSERT INTO user(firstname,lastname,email,password) VALUES ('$firstname','$lastname','$email','$password');";
        $result=$mysqli->query($q);
        if(!$result)
        {
            echo"<br>Insert error-".$mysqli->error;
        }
        else{

            // header('location:login.php');
            echo"<script>
        alert('Registration complete')
        window.location = 'homm.php'
        </script>";
        }
      

    }
    else{  
        $q="INSERT INTO admin(Firstname,Lastname,Email,Password) VALUES ('$firstname','$lastname','$email','$password');";
        $result=$mysqli->query($q);
        if(!$result)
        {
            echo"<br>Insert error-".$mysqli->error;
        }
        else{

            // header('location:login.php');
            echo"<script>
        alert('Registration complete')
        window.location = 'homm.php'
        </script>";
        }
        $mysqli->close();
      }
    
  } else {
    $mysqli->error;
  }
} 
else {
  echo 'test';
}

?>