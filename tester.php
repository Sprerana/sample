<?php

include 'includes/db.php';
$sql="SELECT * FROM users WHERE username='{$_SESSION['username']}'";
$result=mysqli_query($conn,$sql);
$resultcheck=mysqli_num_rows($result);
if ($resultcheck == 1) {
	$row = mysqli_fetch_assoc($result);
}
$mon=explode(",",$row["year"]);
for($i=0;$i<sizeof($mon);$i++)
{
	$chart[$i]=$mon[$i];
}

$dataPoints = array(
	array("y" => $chart[0], "label" => "Jan"),
	array("y" => $chart[1], "label" => "feb"),
	array("y" => $chart[2], "label" => "March"),
	array("y" => $chart[3], "label" => "April"),
	array("y" => $chart[4], "label" => "May"),
	array("y" => $chart[5], "label" => "June"),
	array("y" => $chart[6], "label" => "July"),
	array("y" => $chart[7], "label" => "Aug"),
	array("y" => $chart[8], "label" => "Sep"),
	array("y" => $chart[9], "label" => "Oct"),
	array("y" => $chart[10], "label" => "Nov"),
	array("y" => $chart[11], "label" => "Dec"),

);

$mon1=explode(",",$row["level"]);
for($i=0;$i<sizeof($mon1);$i++)
{
	$ch[$i]=$mon1[$i];
}

$dataPoints1 = array(
	array("y" => $ch[0], "label" => "2015"),
	array("y" => $ch[1], "label" => "2016"),
	array("y" => $ch[2], "label" => "2017"),
	array("y" => $ch[3], "label" => "2018"),
	array("y" => $ch[4], "label" => "2019"),
	
);
 ?>
<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
 var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: ""
	},
	axisX: {
		title: "Month"
	},
	axisY: {
		title: "Extraction in m3"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
var chart1 = new CanvasJS.Chart("chartContainer1", {
	title: {
		text: ""
	},
	axisX: {
		title: "Year"
	},
	axisY: {
		title: "Water Level in meters"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
chart1.render();
 }
</script>
</head>
<body>
<br><br>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<hr style="border: 1px dashed black">
<br><br><br><br>
<h2 style="display: table;margin: 0 auto;">Water Level around Industry</h2>
<br><br>
<div id="chartContainer1" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html> 
