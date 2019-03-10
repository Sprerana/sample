<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<title>Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet"  type="text/css" href="profile.css">
<link rel="stylesheet" type="text/css" href="header.css">
<link href='https://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet'>
<body>
	<header>
		<div>
  <img src="logo.png" style="display:inline;margin-left: 0%;">
  <a href="main.php" style="text-decoration: none;float: right;color: black;padding-right: 5px;font-size: 30px;font-weight: bolder;margin-top: 2.5%;margin-right: 1%;">&#8592 Home</a>
</div>
	

</header>
<hr style="border: 1px dashed black">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script>
    $('.menu-toggle').click(function(){
      $('.site-nav').toggleClass('site-nav--open',500);
      $(this).toggleClass("open");
    });
  </script>
		<h2 align="center">Industry Details</h2>

	<?php
		include 'includes/db.php';
		$sql="SELECT * FROM users WHERE username='{$_SESSION['username']}'";
		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck>0){
			while ($row=mysqli_fetch_assoc($result)) {
				echo '<div class="w3-container" style="position: relative;top:30px;">
		<div class="w3-panel w3-card-4" style="background: #3BC2C6;height:40px;"><br>
			<table>
				<tr>
					<td><span style="font-size: 20px;">Industry Id :</span></td>
					<td>'.$row["id"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Industry Name :</span></td>
					<td>'.$row["username"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Email :</span></td>
					<td>'.$row["email"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Annual Water Draft :</span></td>
					<td>'.$row["draft"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Pre Monsoon Water Level :</span></td>
					<td>'.$row["level_pre_mon"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Post Monsoon Water Level :</span></td>
					<td>'.$row["level_post_mon"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Rise in Water Level :</span></td>
					<td>'.$row["leve_rise"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Fall in Water Level :</span></td>
					<td>'.$row["level_fall"].'</td>
				</tr>
				<tr>
					<td><span style="font-size: 20px;">Suggested Action :</span></td>
					<td>'.$row["action_sugg"].'</td>
				</tr>				
			</table>
		</div>
	</div>';
			}
		}
	?><br><br>
	<hr style="border: 1px dashed black">
	<div>
		<h2 style="display: table;margin: 0 auto;">Monthly Quantum Extractions</h2><br>
		<?php include 'tester.php'; ?>
	</div>
	<br><br><br>
	<hr style="border: 1px dashed black">
	<h2 style="display: table;margin: 0 auto;">Future Predictions</h2>
	<?php include 'poorman1.php';?>

</body>
</html>