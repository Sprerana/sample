<?php
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet"  type="text/css" href="header.css">
  <style type="text/css">
    button{
      background: white;
      border: none;
      cursor: pointer;
      margin-left: 25%;
    }
  </style>
</head>
<body>
  <header>
<div class="container">
  <?php
    if (isset($_SESSION['username'])) {
      echo '<form method="post" action="includes/logout_inc.php">
      <nav class="site-nav">
      <ul>
        <li><a href="main.php"><i class="fa fa-home site-nav--icon"></i>Home</a></li>
        <li><a href="profile.php"><i class="fa fa-home site-nav--icon"></i>Profile</a></li>
        <li><button name="logout" style=""><a>Logout</a></button></li>        
      </ul> 
  </nav>
  <div class="menu-toggle">
    <div class="hamburger"></div>
  </div>
    </form>';
    }
  else{

  echo'<nav class="site-nav">
      <ul>
        <li><a href="index.php"><i class="fa fa-home site-nav--icon"></i>Home</a></li> 
        <li><a href="about.php"><i class="fa fa-info site-nav--icon"></i>About</a></li>
        <li><a href="contact.php"><i class="fa fa-envelope site-nav--icon"></i>Contact</a></li>
      </ul> 
  </nav>
  
  <div class="menu-toggle">
    <div class="hamburger"></div>
  </div>';
}
?>
  
</div>

</header>
<div>
  <img src="logo.png" style="display:inline;margin-left: 0%;">
</div>
<hr style="border: 1px dashed black">
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