<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Hệ Thống Quan Trắc</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
	<img src="Logo_BKDN.png" width="500" height="500" id="logoHeaderBKDN" />
	<img src="Logo_DTVT.png" width="500" height="500" id="logoHeaderDTVT" />
	<div id="top">
		<h1> HỆ THỐNG ĐIỀU KHIỂN BÀN HỌC THÔNG MINH </h1>
		<h2> SMART DESK ADMIN DASHBOARD </h2>
	</div>
	<!-- <div class="header">		                            
            <a href="#" class="btn btn-info" role="button"> HOME</a>
            <a href="../HTQT/node1" class="btn btn-info" role="button"> TRẠM 1</a>
            <a href=".." class="btn btn-info" role="button"> TRẠM 2</a>   
		</div> -->
	<div id="wrapper">
		<div class="temp">
			<h3>test</h3>
		</div>
		<?php
		include('sections/section-fan-toggle/fan-toggle.php');
		?>
		<?php
		include('sections/section-fan-toggle/fan-toggle.php');
		?>
	</div>
	<!-- <script src="ajaxDiv.js"></script> -->

	<div id="footer">
		<center>
			<div id="project1"><b>&copy; Le Hung Long - 16DTCLC2 - Smart Desk Using IOT</b></div>
		</center>
	</div>
</body>

</html>