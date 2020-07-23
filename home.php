<?php

session_start();
?>



<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style type="text/css">
  	
  	#d11{

  width:1150px;
  height:1200px;
  background-color: #ffe6f0;
  margin-top: 0px;
  margin-left: 70px;
  margin-right: 30px;
  margin-bottom: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#d12{
	width:650px;
  height:400px;
  background-color: #ffffff;
  padding-top:30px;
  margin-left: 30px;
    float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
#d13{
	width:439px;
  height:400px;
  background-color: #ffffff;
  padding-top: 0px;
  margin-left: 0px;
  margin-right: 30px;
  float: right;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

#d2{
	width:1200px;
  height:500px;
  background-color:#000000;
  padding-top: 0px;
  margin-left: 15px;
  margin-right: 30px;
  float: left;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}

  </style>
</head>
<body>
 
 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
    
      <a class="navbar-brand" href="#">MyShop</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="# " style="margin-left: 20px;">Home</a></li>
      	<li>
      		<a href="cloths.php"><font style="size:25px; ">Account</a></font></li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Contact <span class="caret"></span></a>
        <ul class="dropdown-menu">

          <li><a href="contact.php">About</a></li>
          <li><a href="contact.php">Page 1-2</a></li>
         
        </ul>
      </li>
      <li><a href="#">Post</a></li>
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
      <li><a href="signup.php" style="margin-right: 20px;"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="logout.php" style="margin-right: 40px;"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li></font>
    </ul>
  </div>
</nav>
  

  <!--main-->
 <div id="d11">
 <h1 style=" "> welcome
    
 	<br><br>
 	<div id="d12">

 <div class="w3-content w3-section" style="width:600px; height: 400px; margin-top: 4px; margin-left: 20px;">
  <img class="mySlides" src="images\p12.jpg" style="width:100%">
  <img class="mySlides" src="images\p1.jpg" style="width:100%">
  <img class="mySlides" src="images\p14.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

 	</div>
 	<div id="d13">
     <br>
   <video controls width="400" height="300">
  <source src="images\bd.mp4" type="video/mp4">
  Video 
</video>
    </div>
  <br><br>
  <div id="d2" style="margin-top:30px; margin-left:27px;">
    <div>
        <h1>SHOPPING HERE</h1>
    </div>
</div>

 	</div>


</body>
</html>