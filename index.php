<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet"  type="text/css" href="header.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="overflow: hidden;">
  <header style="background: white;">
<div class="containers">

  <!--<a href="index.php"><h1 class="logo" style="margin-left: 0%; font-size: 20px;color: white;margin-top: .5%;">Ministry of water resources</h1></a>-->
  <img src="https://www.google.com/url?sa=i&source=images&cd=&cad=rja&uact=8&ved=2ahUKEwjFgpOX9vTgAhVEs48KHUG6DhoQjRx6BAgBEAU&url=https%3A%2F%2Fguardiancsc.com%2F&psig=AOvVaw2xPOA5c2WpiJl8IMgP5GbA&ust=1552216196652677" style="display:inline;margin-left: -28%;">
  <a href="consumptio.php" style="text-decoration: none;float: right;color: black;padding-right: 5px;margin-right: -30%;font-size: 20px;margin-top: 5%;">Industries</a>
    <a href="contact.php" style="text-decoration: none;float: right;color: black;padding-right: 5px;margin-right: -20%;font-size: 20px;margin-top: 5%;">Contact</a>
  <a href="about.php" style="text-decoration: none;float: right;color: black;padding-right: 5px; margin-right: -12%;font-size: 20px;margin-top: 5%;">About</a>
  <a href="login.php" style="text-decoration: none;float: right;color: black;padding-left: 5px;font-size: 20px;margin-top: 5%;">Login</a>
  <span style="float: right;font-size: 20px;margin-top: 5%;color: black;">|</span>
  <a href="signup.php" style="text-decoration: none;float: right;color: black;padding-right: 5px;font-size: 20px;margin-top: 5%;">Signup</a>
  <!--<nav class="site-nav">
      <ul>
        <li><a href="index.php"><i class="fa fa-home site-nav--icon"></i>Home</a></li> 
        <li><a href="about.php"><i class="fa fa-info site-nav--icon"></i>About</a></li>
        <li><a href="contact.php"><i class="fa fa-envelope site-nav--icon"></i>Contact</a></li>
      </ul> 
  </nav>
  
  <div class="menu-toggle">
    <div class="hamburger"></div>
  </div>
  
</div>-->

</header>
<!--<div>
  <br>
  <img src="logo.png" style="display: table;margin: 0 auto;">
  <br><br>
</div>-->
<div class="container" style="width: 101.85%;margin-left: -0.97%; height: 110%;"> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel" style="width: 100%;">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" style="width: 100%;">
      <div class="item active">
        <img src="images/image1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h1 style="color:black"><b></b>Ground water as the purest form of water!</h1>
        </div>
      </div>

      <div class="item">
        <img src="images/image21.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
         <h1 style="color:black"><b>No water, no Life, no blue, no green</b></h1>
        </div>
      </div>
    
      <div class="item">
        <img src="images/image31.jpg" alt="New york" style="width:100%;">
        <div class="carousel-caption">
          <h1 style="color:black"><b>conserve water!conserve life!</b></h1>
          
        </div>
      </div>

      <div class="item">
        <img src="images/image4.png" alt="New york" style="width:100%;">
        <div class="carousel-caption">
          <h1 style="color:black"><b>No water, no Life, no blue, no green</b></h1>
        </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
    $('.menu-toggle').click(function(){
      $('.site-nav').toggleClass('site-nav--open',500);
      $(this).toggleClass("open");
    });
  </script>
</body>
</html>