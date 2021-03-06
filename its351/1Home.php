<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="clock.css">
<script crossorigin src="./react.js"></script>
<script crossorigin src="./react-dom.js"></script>
<script src="./babel-core.js"></script>

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
    z-index:99;
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
  top: 20;
  width: 100%;
}

.sticky + .content {
  padding-top: 30px;
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
  background-color:#f2f2f2;
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
  

  <p class="free"><marquee direction="right">&nbsp;&nbsp; FREE SHIPPING EVERY ORDER&nbsp;&nbsp;</marquee> <a href="face.html"> </p>



		
		
		<div class="rose">
		<img src="rose.png" width="50px" height="70px" style="float:left;">
		<a  href="1Home.php"><h1>ANGEL COSMETIC</h1></a><div id="clock1"></div> 
    <div id="c1"></div> 
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
.prev{
  left:0;
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

.choosed{
  opacity: 0.5;
}
/*button add cart end*/
</style>
</head>
<body>



<div class="slideshow-container">

<div class="mySlides fade">
  
  <img src="TooFaced_R2.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  
  <img src="sale1.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
 
  <img src="winter.jpg" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center;padding-bottom:15px;">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>
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


  
	<div class="clock">
		<div class="clockFace">
			<div class="brand">Angel</div>
			
			<!--<div class="horizontal">
				<div class="left">IX</div>
				<div class="vertical">
					<div class="top">XII</div>
					<div class="bottom">VI</div>
				</div>
				<div class="right">III</div>
			</div>-->
			<div class="hand handHour"></div>
			<div class="hand handMin"></div>
			<div class="hand handSec"></div>
			<!-- <div class="circle"></div> -->
		</div>
	</div>


<ul>
<div class="topnav" id="navbar">

  <li><a href="1Home.php">HOME</a></li>
  <li><a href="1Home.php?category=face">FACE</a></li>
  <li><a href="1Home.php?category=eye">EYES</a></li>
  <li><a href="1Home.php?category=blush">BLUSHES</a></li>
  <li><a href="1Home.php?category=lip">LIPS</a></li>
  <div class="submit" style="float:right">
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
    </div>

  
  <button class="topnav" onclick="addProduct('showcart')" style="float:right"> Shopping Cart&nbsp;<img src="bag.png" width="15px" height="15px">  </button>

 </ul>
 <!-- <script>
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
</script> -->
 </div>
 <!--1-->
 <form id="form1" name="form1" method="post">
 <?php 
 
  require_once('connect.php');
  
  $sql = "SELECT * FROM product";

  if(isset($_GET['category'])){
    $sql = $sql." WHERE ProductType='$_GET[category]'";
    
  }
  
  $result = $mysqli->query($sql);
  while ($row = $result->fetch_assoc()){
    ?>
      <div class="img1" style="margin-left:6.8%">
        <div class="container">
          <img src="<?php echo $row['image']; ?>" width="300px" height="300px" alt="Avatar" class="image" style="width:100%">
          <div class="overlay">
        <?php
          /*$QuickView = "SELECT QuickView FROM product";
          if(isset($_GET['QuickView'])){
          $QuickView = $QuickView." WHERE QuickView='$_GET[QuickView]'";
          }
          $result = $mysqli->query($QuickView);
          while ($row = $QuickView->fetch_assoc()){
          */
        ?>
            <div class="text1"><a href = <?php echo $row['QuickView']; ?>> Quick View</a></div>
          </div></div>

          
                  
              <h5><?php echo $row['ProductName']; ?></h5>
              <button type="button" onclick="toggle(<?php echo $row['ProductID'] ?>, event)" value="chanel" class="button">Add cart</button>
              <h5><?php echo $row['Price']; ?> BAHT</h5>
          <div id="reviewstarratings">
              <img class="review-stars" src="5heart.jpg" width="60px" height="15px">
            </div>
            
            <div class="prSnippetNumberOfRatingsText">
              (98<span class="reviews"> reviews</span>)
            </div>
            <input style="display:none" type="checkbox" name="products[]" id="<?php echo $row['ProductID'] ?>" value="<?php echo $row['ProductID'] ?>">
        </div>	
    <?php
  }
 
 ?>
  <input type="submit" value="confirm" style="display:none">
</form>
<br><br><br><br>
<img src="tooface.jpg" class = "ads" width="1300px" height="400px">
<style>
  .feedback{
    text-align:center;
    color:#ffb3e6;

  }
</style>
<div class="feedback">
      <a href="feedback.php" style="color:#ff1a66;" >SEE FEEDBACK HERE!</a>
</div>
<div class="us">
    <h4 style=" text-decoration: underline;">FOLLOW US</h4>
    <div id="react"></div> 

	<a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-instagram"></a>
    </div>
<div id="test"></div>

</body>
</html>

<script>
  function toggle(productID, event){
    if(document.getElementById(productID).checked == false){
      document.getElementById(productID).checked = true
      event.target.className += " choosed";
    } else {
      document.getElementById(productID).checked = false
      event.target.classList.remove("choosed")
    }
    
  }

  function addProduct(url){
    document.getElementById('form1').action = url+'.php'
    document.getElementById('form1').submit()
  }
</script>


  
<script type="text/babel">
  const dataReact = (
    <div>
      Facebook : Angle Cosmetic<br/>
      Instagram : Angle Cosmetic<br/>
      Youtue : Angle Cosmetic<br/>
      Twitter : Angle Cosmetic<br/>
    </div>
  )
  ReactDOM.render(dataReact, document.getElementById('react'))
</script>


<script type="text/babel">

/*clock*/
const secondsHand = document.querySelector(".handSec");
const minutesHand = document.querySelector(".handMin");
const hoursHand = document.querySelector(".handHour");

function setDate() {
  const now = new Date();

  const seconds = now.getSeconds();
  const secondsDegree = (seconds / 60) * 360 + 90;
  secondsHand.style.transform = `rotate(${secondsDegree}deg)`;
  if (secondsDegree === 450) {
    secondsHand.style.transform = `rotate(90deg)`;
  }

  const minutes = now.getMinutes();
  const minutesaDegree = (minutes / 60) * 360 + 90;
  minutesHand.style.transform = `rotate(${minutesaDegree}deg)`;

  const hours = now.getHours();
  const hoursDegree = (hours / 12) * 360 + 90;
  hoursHand.style.transform = `rotate(${hoursDegree}deg)`;
}


setInterval(setDate, 1000)

</script>