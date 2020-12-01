<?php
    $servername = "localhost";
	$username = "root";
	$password = ""; 
	$dbname = "gp"; 
	$link = new mysqli($servername,$username,$password, $dbname) or die ("no connect!!!!");
	mysqli_query($link,'SET NAMES UTF8');
	date_default_timezone_set('Asia/Ho_Chi_Minh');	
	$temp = $_GET['temp'];
	$humi = $_GET['humi'];
	$light = $_GET['light'];
	$noise = $_GET['noise'];
	$pa = $_GET['pa'];
	$pm25 = $_GET['pm25'];
	$so2 = $_GET['so2'];
	$no2 = $_GET['no2'];
	$co = $_GET['co'];
	$time=date('Y-m-d H:i:s');
	$sql = "INSERT INTO data1 VALUES (NULL,'$temp','$humi','$light','$noise','$pa','$pm25','$so2','$no2','$co','$time')";
	$result = mysqli_query($link, $sql) or die ("no connect: $sql ".mysqli_error($link));
	$query = "SELECT * FROM setting ORDER BY id DESC LIMIT 1";
	$result = mysqli_query($link,$query) or die (mysqli_error($link));
	if (mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_array($result))
		{
			echo "*".$row['timer'].";".$row['maxPPM25'].";".$row['minPPM25'].";".$row['maxSO2'].";".$row['minSO2'].";".$row['maxNO2'].";".$row['minNO2'].";".$row['maxCO'].";".$row['minCO']."#";
		}
	}

	// $query = "SELECT * FROM data1 ORDER BY time DESC LIMIT 5";
	// $result = mysqli_query($link,$query) or die (mysqli_error($link));
	// if (mysqli_num_rows($result) > 0)
	// {
	// 	$top5Data1 = [];
	// 	while ($row = mysqli_fetch_array($result))
	// 	{
	// 		// echo "*".$row['spw'].";
	// 		// 		".$row['drw'].";
	// 		// 		".$row['pm10'].";
	// 		// 		".$row['pm25'].";
	// 		// 		".$row['so2'].";
	// 		// 		".$row['no2'].";
	// 		// 		".$row['co'].
	// 		// 		"#";
	// 		$dataRow = array("spw"=>$row['spw'], "drw"=>$row['drw'], "pm10"=>$row['pm10'], "pm25"=>$row['pm25'], "so2"=>$row['so2'], "no2"=>$row['no2'], "co"=>$row['co']);
	// 		$dataRowJSON = json_encode($dataRow);
	// 		array_push($top5Data1, $dataRow);
	// 		}
	// 	}
		
?>