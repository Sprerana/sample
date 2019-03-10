<!DOCTYPE html>
<html>
<title>Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href='https://fonts.googleapis.com/css?family=Bubblegum Sans' rel='stylesheet'>
<body>
		<header>
			<div>
  				<img src="logo.png" style="display:table;margin: 0 auto;">
			</div>
		</header>
		<table>
			<tr>
	<?php
		include 'includes/db.php';
		$sql="SELECT * FROM users order by level_fall desc";
		$result=mysqli_query($conn,$sql);
		?>
			<h2 align="center">INDUSTRY DETAILS</h2><br>
			<table cellpadding="10" style="display: table;margin: 0 auto;">
				<tr>
					<th style="font-size: 20px;">Industry Id</th>
					<th style="font-size: 20px;">Industry Name</th>
					<th style="font-size: 20px;">Annual Water Draft</th>
					<th style="font-size: 20px;">Pre Monsoon Water Level</th>
					<th style="font-size: 20px;">Post Monsoon Water Level</th>
					<th style="font-size: 20px;">Rise in Water Level</th>
					<th style="font-size: 20px;">Fall in Water Level</th>
				</tr>

			<?php 
			while ($row=mysqli_fetch_assoc($result)){?>
				<tr>
					<td style="font-size: 15px;"><?php echo $row['id'];?></td>
					<td style="font-size: 15px;"><?php echo $row['username'];?></td>
					<td style="font-size: 15px;"><?php echo $row['draft'];?></td>
					<td style="font-size: 15px;"><?php echo $row['level_pre_mon'];?></td>
					<td style="font-size: 15px;"><?php echo $row['level_post_mon'];?></td>
					<td style="font-size: 15px;"><?php echo $row['leve_rise'];?></td>
					<td style="font-size: 15px;"><?php echo $row['level_fall'];?></td>
				</tr>
				<?php }
				 ?>
			</table>
			<?php 
				$sql="SELECT email , level_fall FROM users WHERE username=username";
				$result=mysqli_query($conn,$sql);
				while ($row=mysqli_fetch_array($result)) {
					if($row['level_fall']>=0 && $row['level_fall']<=2)
					{
						$to=$row['email'];
						$subject="Alert";
						$txt="You can continue extracting water";
						$headers="MIME-Version: 1.0" . "\r\n";
						$headers="Content_type: text/html; charset=UTF-8" . "\r\n";
						$headers="From: donotreply.ministryofwater@gmail.com" . "\r\n";
						mail($to,$subject,$txt,$headers);
					}
					elseif ($row['level_fall']>2 && $row['level_fall']<=4) {
						$to=$row['email'];
						$subject="Alert";
						$txt="The ground water in your zone is changing, take precautions";
						$headers="MIME-Version: 1.0" . "\r\n";
						$headers="Content_type: text/html; charset=UTF-8" . "\r\n";
						$headers="From: donotreply.ministryofwater@gmail.com" . "\r\n";
						mail($to,$subject,$txt,$headers);
					}
					elseif ($row['level_fall']>4 && $row['level_fall']<=6) {
						$to=$row['email'];
						$subject="Alert";
						$txt="Make artificial recharge to restore ground water levels";
						$headers="MIME-Version: 1.0" . "\r\n";
						$headers="Content_type: text/html; charset=UTF-8" . "\r\n";
						$headers="From: donotreply.ministryofwater@gmail.com" . "\r\n";
						mail($to,$subject,$txt,$headers);
					}
					else{
						$to=$row['email'];
						$subject="Alert";
						$txt="Serious!! Please rellocate";
						$headers="MIME-Version: 1.0" . "\r\n";
						$headers="Content_type: text/html; charset=UTF-8" . "\r\n";
						$headers="From: donotreply.ministryofwater@gmail.com" . "\r\n";
						mail($to,$subject,$txt,$headers);
					}
				}
				?>

</body>
</html>