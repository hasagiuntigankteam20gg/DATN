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
    
    <form action="../index.php" method ="post">
		<table align='center' border=1 cellspacing=2 cellpadding='8' style="width: 80%;">
			<tr id="trForm">
				<td>
					Danger Temperature: <input type='text' name='maxTemp' id='MaxTemp'>												
				</td>
				<td>
					Danger PPM10: <input type='text' name='maxPPM10' id='MaxPPM10'>					
				</td>
                <td>
					Danger SO<sub>2</sub>: <input type='text' name='maxPPM10' id='MaxPPM10'>					
				</td>
				</tr>
			<tr id="trForm">
				<td>
					Warning Temperature: <input type='text' name='minTemp' id='MinTemp'>
				</td>
				<td>
					Warning PPM10: <input type='text' name='minHumi' id='MinHumi'>
				</td>
				<td>
					Warning SO<sub>2</sub>: <input type='text' name='minPPM' id='MinPPM'>
				</td>
				</tr>
            <tr id="trForm">
				<td>
					Maximum Humidity: <input type='text' name='maxHumi' id='MaxHumi'>
				</td>
				<td>
					Danger PPM25: <input type='text' name='minHumi' id='MinHumi'>
				</td>
				<td>
					Danger NO<sub>2</sub>: <input type='text' name='minPPM' id='MinPPM'>
				</td>
				</tr> 
                <tr id="trForm">
				<td>
					Minium Humidity: <input type='text' name='minTemp' id='MinTemp'>
				</td>
				<td>
					Warning PPM25: <input type='text' name='minHumi' id='MinHumi'>
				</td>
				<td>
					Warning NO<sub>2</sub>: <input type='text' name='minPPM' id='MinPPM'>
				</td>
				</tr>   
			<tr id="trForm">
				<td colspan="2"><p id="status">Nhập giá trị để cập nhật</p></td>
				<td>
					<input type="submit" name="submit" value="Cập nhật" id="updateButton">
					
				</td>
			</tr>
		</table>
	</form>  
</body>
</html>