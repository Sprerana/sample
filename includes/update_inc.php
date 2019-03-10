<?php
session_start();
if(isset($_POST['signupbtn'])){

	include_once 'db.php';
	$month=mysqli_real_escape_string($conn,$_POST['month']);
	$update_val=mysqli_real_escape_string($conn,$_POST['update']);
	
	$update_val2=mysqli_real_escape_string($conn,$_POST['gd1']);
	$update_val3=mysqli_real_escape_string($conn,$_POST['gd2']);
	$username=$_SESSION['username'];
	if(empty($update_val)){
		header("Location: ../signup.php?signup=empty");
		exit();
	}
	else
	{
		$sql="INSERT INTO users ($month,gd1,gd2) VALUES($update_val,$update_val2,$update_val3) WHERE username=1";
		$result=mysqli_query($conn,$sql);
		if($result==true){
		header("Location:updatesuccess.php");
	}
	}
}
	?>