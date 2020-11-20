<?php
    $servername = "localhost";
	$username = "root";
	$password = ""; 
	$dbname = "gp"; 
	$link = new mysqli($servername,$username,$password, $dbname) or die ("no connect!!!!");
	mysqli_query($link,'SET NAMES UTF8');
	date_default_timezone_set('Asia/Ho_Chi_Minh');  
	$timer = $_GET['timer'];
	$maxPPM25 = $_GET['maxPPM25'];
    $minPPM25 = $_GET['minPPM25'];
    $maxPPM10 = $_GET['maxPPM10'];
    $minPPM10 = $_GET['minPPM10'];
    $maxSO2 = $_GET['maxSO2'];
    $minSO2 = $_GET['minSO2'];
    $maxNO2 = $_GET['maxNO2'];
    $minNO2 = $_GET['minNO2'];
    $maxCO = $_GET['maxCO'];
    $minCO = $_GET['minCO'];
	$sql = "UPDATE setting SET timer=$timer,maxPPM25=$maxPPM25,minPPM25=$minPPM25,maxPPM10=$maxPPM10,minPPM10=$minPPM10,maxSO2=$maxSO2,minSO2=$minSO2,maxNO2=$maxNO2,minNO2=$minNO2,maxCO=$maxCO,minCO=$minCO"; 
	$result = mysqli_query($link, $sql) or die ("no connect: $sql ".mysqli_error($link));
	echo "Dữ liệu điều khiển = timer = ".$timer." -- maxPPM25 = ".$maxPPM25." -- minPPM25 = ".$minPPM25." -- maxPPM10 = ".$maxPPM10." -- minPPM10 = ".$minPPM10." -- maxSO2 = ".$maxSO2." -- minSO2 = ".$minSO2." -- maxNO2 = ".$maxNO2." -- minNO2 = ".$minNO2." -- maxCO = ".$maxCO." -- minCO = ".$minCO." đã được cập nhật.";
?>