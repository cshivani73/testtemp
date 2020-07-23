<?php
session_start();
?>

<html>

  <head>
    <title> Login</title>
  </head>

  <link rel="stylesheet" type = "text/css" href ="contact.css">

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <body>


    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

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
      <li><a href="login.php" style="margin-right: 40px;"><span class="glyphicon glyphicon-log-in"></span> Login</a></li></font>
    </ul>
  </div>
</nav>  
    <br>

    
    <div class="container"  >
    <div class="col-md-5" style="float: none; margin: 0 auto; ">
      <div class="form-area" style="border-radius: 20px;">
        <form method="post" action="">
        <br style="clear: both">
          <h3 style="margin-bottom: 25px; text-align: center; font-size: 30px;"> Login Form</h3>

         

          <div class="form-group">
            <input type="email" class="form-control" id="email" name="email" placeholder="Email Id" required>
          </div>   
          
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
          </div>
                  
          <input type="submit" name="submit" type="button" id="submit" name="submit" class="btn btn-primary pull-right"/>    
        </form>

        
      </div>
    </div>
      
    </div>

     <?php
if (isset($_POST['submit'])){
require 'connection1.php';
$conn = Connect();


$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);

$query = "select * from signup where email='$email' && password='$password'"; 

$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
if($num==1)
{
  $_SESSION['email']=$email;
  header('location:home.php');
}
else{
  header('location:login.php');
}

$conn->close();
}
?>
    </div>

    

     </body>

  
</html>