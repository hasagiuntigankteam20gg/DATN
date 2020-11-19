<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRẠM ĐO 1</title>
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>
    <img src="Logo_BKDN.png" width="500" height="500" id="logoHeaderBKDN"/>
    <img src="Logo_DTVT.png" width="500" height="500" id="logoHeaderDTVT"/>
    <div id="top">  
            <center>HỆ THỐNG QUAN TRẮC THỜI TIẾT VÀ KHÔNG KHÍ</center>
			<center>WEATHER AND AIR MONITORING SYSTEM</center>  
        </div>
    
		<div class="header">
					                            
            <a href="../" class="btn btn-info" role="button"> HOME</a>
            <a href="#" class="btn btn-info" role="button"> TRẠM 1</a>
            <a href=".." class="btn btn-info" role="button"> TRẠM 2</a>   
        </div>
    
    <form action="../comparasion.php" method ="post">
		<table align='center' border=1 cellspacing=2 cellpadding='8' style="width: 80%;">
			<tr id="trForm">
				<td>
					Danger PPM2.5  : <input type='number' step ='any' name='maxPPM25' id='MaxPPM25'>
					Warning PPM2.5: <input type='number' step='any' name='minPPM25' id='MinPPM25'>												
				</td>
				<td>
					Danger SO<sub>2</sub>: <input type='number' step='any' name='maxSO2' id='MaxSO2'>
					Warning SO<sub>2</sub>: <input type='number' step='any' name='minSO2' id='MinSO2'>					
				</td>
                <td>
					Danger CO: <input type='number' name='maxCO' step='any' id='MaxCO'>
					Warning CO: <input type='number' step='any' name='minCO' id='MinCO'>					
				</td>
				</tr>
			<!-- <tr id="trForm">
				<td>
					Warning PPM2.5: <input type='number' step='any' name='minPPM25' id='MinPPM25'>
				</td>
				<td>
					Warning SO<sub>2</sub>: <input type='number' step='any' name='minSO2' id='MinSO2'>
				</td>
				<td>
					Warning CO: <input type='number' step='any' name='minCO' id='MinCO'>
				</td>
				</tr> -->
            <tr id="trForm">
				<td>
					Danger PPM10: <input type='number' step='any' name='maxPPM10' id='MaxPPM10'>
					Warning PPM10: <input type='number' step='any' name='minPPM10' id='MinPPM10'>
				</td>
				<td>
					Danger NO<sub>2</sub>: <input type='number' step='any' name='maxNO2' id='MinNO2'>
					Warning NO<sub>2</sub>: <input type='number' step='any' name='minNO2' id='MinNO2'>
				</td>
				<td>
					<!-- Danger NO<sub>2</sub>: <input type='text' name='minPPM' id='MinPPM'> -->
				</td>
				</tr> 
                <!-- <tr id="trForm">
				<td>
					Warning PPM10: <input type='number' step='any' name='minPPM10' id='MinPPM10'>
				</td>
				<td>
					Warning NO<sub>2</sub>: <input type='number' step='any' name='minNO2' id='MinNO2'>
				</td>
				<td>
					Warning NO<sub>2</sub>: <input type='text' name='minPPM' id='MinPPM'>
				</td>
				</tr> -->
			<tr id="trForm">
				<td>Thời gian cập nhật</p></td>
				<td colspan="2">
					<input type="radio" name="timer" value="5" checked="checked"> 5 minutes&nbsp;&nbsp;&nbsp;
					<input type="radio" name="timer" value="10" checked="checked"> 10 minutes&nbsp;&nbsp;&nbsp;
					<input type="radio" name="timer" value="30" checked="checked"> 30 minutes&nbsp;&nbsp;&nbsp;
				</td>   
			<tr id="trForm">
				<td colspan="2"><p id="status">Nhập giá trị để cập nhật</p></td>
				<td>
					<input type="submit" name="submit" onclick="ajaxSetTDS()" value="submit" id="updateButton">
					
				</td>
			</tr>
		</table>
	</form>  
</body>
</html>