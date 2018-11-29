<!DOCTYPE html>
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
/*welcome*/

/*table{
    margin-left:275px;
    
}
th{
    background:	#FFB6C1;
    font-family:'Courier, monospace';
}
*/
.feedback{
  float:left;
  margin-left:550px;
  font-size:20px;
}
.comment{
  width:500px;
  height:200px;
}


/*welcomeend*/
</style>
</head>
<body>
<link rel="stylesheet" href="stylehome.css">

  <p class="free">&nbsp;&nbsp; FREE SHIPPING&nbsp;&nbsp; <a href="face.html"> shop now</p>



		
		
		<div class="rose">
		<img src="rose.png" width="50px" height="70px" style="float:left;">
		<a href="homm.php"><h1>ANGEL COSMETIC</h1></a>
		</div>

 
</div>
<div class="feedback">
<form action="feedbackinsert.php" method="POST">
<?php
//$id=$_POST['userid'];
//$name=$_POST['name'];
//$message=$_POST['message'];
//$q="INSERT INTO feedback(Name,message) VALUES ('$name','$message');";

		echo"<br><label for='name'>Name</label><br>";
		echo"<input type='text' id='name' name='name'>";
		echo"<br><label for='subject'>Comment</label><br>";
    echo"<textarea id='comment' name='comment' style='height:200px width:500px'></textarea>";
    echo"<br><input type='submit' name='submit' value='submit'>";	
    echo"<br><a href='feedback.php'>Back to review</a>";

  ?>
  </form>
  </div>
  </html>