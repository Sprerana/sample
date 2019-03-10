<?php
		include 'includes/db.php';
		$sql="SELECT * FROM users WHERE username=username ";
		$result=mysqli_query($conn,$sql);
		?>
				<h2 align="center">HIGH GROUND WATER CONSUMING INDUSTRIES</h2><br>
				<table cellpadding="10" style="display: table;margin: 0 auto;">
					<tr>
						<th style="font-size: 20px;">Industry Id</th>
						<th style="font-size: 20px;">Industry Name</th>
						<th style="font-size: 20px;">Annual Water Draft</th>
					</tr>
					<?php
						while ($row=mysqli_fetch_assoc($result)) {
							if($row['draft']>=7500){?>
							<tr>
								<td style="font-size: 15px;"><?php echo $row['id'];?></td>
								<td style="font-size: 15px;"><?php echo $row['username'];?></td>
								<td style="font-size: 15px;"><?php echo $row['draft'];?></td>
							</tr>
					<?php	}


				}?>
					
				</table>
		