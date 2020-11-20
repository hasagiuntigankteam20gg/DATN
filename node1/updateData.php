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
	$query = "SELECT * FROM setting";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result))
		{
			echo "*".$row['timer'].";
					".$row['maxPPM25'].";
					".$row['minPPM25'].";
					".$row['maxPPM10'].";
					".$row['minPPM10'].";
					".$row['maxSO2'].";
					".$row['minSO2'].";
					".$row['maxNO2'].";
					".$row['minNO2'].";
					".$row['maxCO'].";
					".$row['minCO'].
					"#";
		}
	}
	
?>