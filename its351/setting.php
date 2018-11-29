<?php 

  session_start();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

a:link {
    text-decoration: none;
}

a:visited {
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

a:active {
    text-decoration: underline;
}


ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    position: -webkit-sticky; /* Safari */
    position: sticky;
    top: 0;
}

li {
    float: left;
}

li a {
    display: block;
    color: #FF0066;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}

<--!-->

* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
  
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    
    text-align: center;
    background: white;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #FFCCCC;
	
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #000000;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #C6E2FF;
    color: #FF0033;
}
.content {
  padding: 16px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 60px;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 75%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 25%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Footer */
.footer {
    padding: 20px;
    text-align: center;
    background: #ddd;
    margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
    .topnav a {
        float: none;
        width: 100%;
    }
}

.fa {
  padding: 20px;
  font-size: 20px;
  width: 60px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-instagram {
  background: #125688;
  color: white;
}


/*picstart*/
.container {
  position: relative;
  width: 100%;
}

.image {
  display: block;
  width: 100%;
  height: auto;
  
}


.overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: #FFEFD5;
  overflow: hidden;
  width: 100%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

.container:hover .overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

.text1 {
  color:black;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
/*picend*/

</style>
</head>
<body>
<link rel="stylesheet" href="stylehome.css">

  <p class="free">&nbsp;&nbsp; FREE SHIPPING&nbsp;&nbsp; <a href="face.html"> shop now</p>



		
		
		<div class="rose">
		<img src="rose.png" width="50px" height="70px" style="float:left;">
		<a href="Home.html"><h1>ANGEL COSMETIC</h1></a>
		</div>

<div class="header">

  
  <head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}

/*button add cart start*/
.button {
    position: relative;
    background-color: #FFCCCC;
    border: none;
    font-size: 14px;
    color: black;
    padding: 20px;
    width: 100px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
    cursor: pointer;
}

.button:after {
    content: "";
    background: #C6E2FF;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px!important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
/*button add cart end*/

/*payment start*/
.collapsible {
    background-color: #C6E2FF;
    color: black;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
}

.active, .collapsible:hover {
    background-color: #FFCCCC;
}

.content {
    padding: 0 18px;
    display: none;
    overflow: hidden;
    background-color: #f1f1f1;
}
/*payment end*/

/*pament in start*/
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 35%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #B4045F;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 30%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  
}

.btn:hover {
  background-color: #00004b;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
/*payment in end*/
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  


</div>



</div>
<br>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<ul>
<div class="topnav">

  <li><a href="1Home.html">HOME</a></li>
  <li><a href="1face.html">FACE</a></li>
  <li><a href="1eyes.html">EYES</a></li>
  <li><a href="1blushes.html">BLUSHES</a></li>
  <li><a href="1lips.html">LIPS</a></li>
  <a href="login.php" style="float:right">Sign in</a>
  <?php
       if(isset($_SESSION['username'])){?>
        <a href="logout.php">Logout</a>
        <a href="accountpage.php"><img src="avatar.png" width="20px" height="20px"></a>
      <?php 
        } else{
    ?>
        <a href="login.php">Sign in</a>
      <?php
        } 
        ?>
  <a href="showcart.php" style="float:right"> Shopping Cart&nbsp;<img src="bag.png" width="15px" height="15px">  </a>

 </ul>
 <script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
 </div>
 
 <br><br><br>
 <button class="collapsible">My Account</button>
<div class="content">
  <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="edit.php" method="POST">

        <div class="row">
          <div class="col-50">
            <h3>My account</h3>
            <form action='edit.php' method='POST'>
            <?php
        
            require_once('connect.php');
            $userid=$_SESSION['ID'];
            $q="SELECT * FROM user WHERE ID='$userid'";
            $result=$mysqli->query($q);
            while ($row=$result->fetch_assoc()){
              echo"<label for='Fname'><i class='fa fa-user'></i> First Name</label>";
              echo" <input class='fa fa-user' type='text' id='fname' name='firstname' value=".$row['firstname']." >";
              echo"<label for='Lname'><i class='fa fa-user'></i> Last Name</label>";
              echo"<input type='text' id='lname' name='lastname' value=".$row['lastname']. ">";
              echo"<label for='email'><i class='fa fa-envelope'></i> Email</label>";
              echo"<input type='text' id='email' name='email' value=".$row['email'].">";
              echo"<label for='password'><i class='fa fa-institution'></i> Password</label>";
              echo"<input type='password' id='city' name='city' >";
              //echo "<label for='mobiletelephone'><i class='fa fa-institution'></i>Mobile Telephone</label>";
              //echo "<input type='text' id='city' name='city'>";
		        }
            ?>
            <input type='submit' value='Save' class='btn' ><br><br>
		</div></div></div></form></div></div>

</div>
<br><br><br>
<button class="collapsible">My Address</button>
<div class="content">
  <div class="row">
  <div class="col-75">
    <div class="container">
      <form action="address.php" method=POST>
      <?php
      $userid=$_SESSION['ID'];
      $qu="SELECT * FROM address WHERE userid=$userid";
      $result1=$mysqli->query($qu);
      if(!$result1){
        $mysqli->error;
      } else {
        
        if(mysqli_num_rows($result1)>0){
          while ($row1=$result1->fetch_assoc()){
            ?>
      
              <div class="row">
                <div class="col-50">
                  <h3>Address</h3>
                  <?php
                  echo"<label for='adr'><i class='fa fa-address-card-o'></i> Address</label>";
                  echo"<input type='text' id='adr' name='address' value=".$row1['Address']." >";
                  echo"<label for='city'><i class='fa fa-institution'></i> City</label>";
                  echo"<input type='text' id='city' name='city' value=".$row1['city']." >";
                ?>
                  <div class="row">
                    <div class="col-50">
                    <?php
                      echo"<label for='state'>State</label>";
                      echo"<input type='text' id='state' name='state'value=".$row1['state']." >";
                      ?>
                    </div>
                    <div class="col-50">
                    <?php
                      echo "<label for='zip'>Zip</label>";
                      echo "<input type='text' id='zip' name='zip' value=".$row['zip']." >";
            }
            echo "<input type='submit' value='Save' name='save' class='btn' ><br><br>";
        } else {?>
          <div class="row">
                <div class="col-50">
                  <h3>Address</h3>
                  <?php
                  echo"<label for='adr'><i class='fa fa-address-card-o'></i> Address</label>";
                  echo"<input type='text' id='adr' name='address'value='' >";
                  echo"<label for='city'><i class='fa fa-institution'></i> City</label>";
                  echo"<input type='text' id='city' name='city' value='' >";
                ?>
                  <div class="row">
                    <div class="col-50">
                    <?php
                      echo"<label for='state'>State</label>";
                      echo"<input type='text' id='state' name='state'value='' >";
                      ?>
                    </div>
                    <div class="col-50">
                    <?php
                      echo "<label for='zip'>Zip</label>";
                      echo "<input type='text' id='zip' name='zip' value='' >";
                      echo "<input type='submit' value='Add' name='add' class='btn' ><br><br>";
        }

      }
                  ?>
      
      
        </div>
      
      
				
		
		</div></div></div></form></div></div>
		</form>
              
            </div>
          </div></div>
</div>



<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

<div class="us">
    <h4 style=" text-decoration: underline;">FOLLOW US</h4>
    Facebook : Angle Cosmetic<br>
    Instagram : Angle Cosmetic<br>
    Youtue : Angle Cosmetic<br>
    Twitter : Angle Cosmetic<br>
	<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
    </div>

</body>
</html>