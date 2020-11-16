<?php
    $servername = "localhost";
	$username = "root";
	$password = ""; 
	$dbname = "gp"; 
	$link = new mysqli($servername,$username,$password, $dbname) or die ("no connect!!!!");
	mysqli_query($link,'SET NAMES UTF8');
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$time=date('Y-m-d H:i:s');
	$spw = $_GET['spw'];
	$drw = $_GET['drw'];
	$pm10 = $_GET['pm10'];
	$pm25 = $_GET['pm25'];
	$so2 = $_GET['so2'];
	$no2 = $_GET['no2'];
	$co = $_GET['co'];
	$sql = "INSERT INTO data1 VALUES (NULL,'$spw','$drw','$pm10','$pm25','$so2','$no2','$co','$time')";
	$result = mysqli_query($link, $sql) or die ("no connect: $sql ".mysqli_error($link));
	$query = "SELECT * FROM data1";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	
?>