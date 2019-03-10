<?php
		$to="riteshreddy98@gmail.com";
		$subject="Alert";
		$txt="You can continue extracting water";
		$headers="MIME-Version: 1.0" . "\r\n";
		$headers="Content_type: text/html; charset=UTF-8" . "\r\n";
		$headers="From: donotreply.ministryofwater@gmail.com" . "\r\n";
		if(mail($to,$subject,$txt,$headers))
		{
			echo "success";
		}
		else
		{
			echo "failure";
		}
				

?>