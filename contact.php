<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>

<h2 style="text-align:center">CGWA Headquaters</h2>

<div class="card">
  <img src="cgwa.jpg" alt="CGWA" style="width:90% ;height:250px;">
  <h1>Member Secretary</h1>
  <p class="title">Central Groundwater Authority, Example</p>
  <p>Address:18/11, Jamnagar House, Man Singh Road  
New Delhi-110011. 
Ph. No. 011-23383561, 23383824
Fax 23382051</p>
  <div style="margin: 24px 0;">
    <a href="cgwa@nic.in"><i class="fa fa-dribbble"></i></a> 
    <a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>  
    <a href=""><i class="fa fa-linkedin"></i></a>  
    <a href=""><i class="fa fa-facebook"></i></a> 
  <br>Also contact us on <a href="cgwa@nic.in" style="font-size: 15px;color:red;">cgwa@nic.in </a>
  </div>
  <p><button href="">Contact</button></p>
</div>

</body>
</html>
