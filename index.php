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
    <img src="Logo_BKDN.png" width="500" height="500" id="logoHeaderBKDN"/>
    <img src="Logo_DTVT.png" width="500" height="500" id="logoHeaderDTVT"/>
        <div id="top">  
            <center>HỆ THỐNG QUAN TRẮC THỜI TIẾT VÀ KHÔNG KHÍ </center>
			<center> WEATHER AND AIR MONITORING SYSTEM</center>  
        </div>    
		<div class="header">		                            
            <a href="#" class="btn btn-info" role="button"> HOME</a>
            <a href="../HTQT/node1" class="btn btn-info" role="button"> TRẠM 1</a>
            <a href=".." class="btn btn-info" role="button"> TRẠM 2</a>   
		</div>
		<div id="wrapper">
            <div id="left">
			<?php
				// if (isset($_GET['submit'])) {
					
				// }
				if (isset($_POST['submit'])) {
					$servername = "localhost"; //Servername luôn luôn là localhost
					$username = "root"; //m?c d?nh username là root
					$password = ""; //password b? tr?ng
					$dbname = "gp"; //tên database chúng ta v?a t?o khi nãy
					$link = new mysqli($servername,$username,$password, $dbname) or die ("no connect!!!!");
					mysqli_query($link,'SET NAMES UTF8');
					date_default_timezone_set('Asia/Ho_Chi_Minh');					
					$query = "SELECT * FROM data1 ORDER BY id DESC LIMIT 1";
					$result = mysqli_query($link,$query) or die (mysqli_error($link));
					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_array($result))// tạo bang sql tren database
							{		
								// echo " 										
								// 	".$row['pm25'].";
								// 	".$row['pm10'].";
								// 	".$row['so2'].";
								// 	".$row['no2'].";
								// 	".$row['co'].";									
								// ";
								// lay data tu DB
								$ssso2 = $row['so2'];
								$ssno2 = $row['no2'];
								$ssco = $row['co'];
								$ssppm25 = $row['pm25'];
								$ssppm10 = $row['pm10'];

							}
					}
						
					// echo  "{$_POST["maxPPM25"]}"; 
					// echo  "{$_POST["minPPM25"]}";
					// echo  "{$_POST["maxPPM10"]}";
					// echo  "{$_POST["minPPM10"]}";
					// echo  "{$_POST["maxSO2"]}";
					// echo  "{$_POST["minSO2"]}";  
					// echo  "{$_POST["maxNO2"]}";
					// echo  "{$_POST["minNO2"]}";
					// echo  "{$_POST["maxCO"]}";
					// echo  "{$_POST["minCO"]}";
					// // lay het chi so
					$maxPPM25 = $_POST["maxPPM25"];
					$minPPM25 = $_POST["minPPM25"];
					$maxPPM10 = $_POST["maxPPM10"];
					$minPPM10 = $_POST["minPPM10"];
					$maxSO2 = $_POST["maxSO2"];
					$minSO2 = $_POST["minSO2"];
					$maxNO2 = $_POST["maxNO2"];
					$minNO2 = $_POST["minNO2"];
					$maxCO = $_POST["maxCO"];
					$minCO = $_POST["minCO"];
					// if(is_numeric(str_replace('.','',$maxPPM25))){
					// 	$maxPPM25 = sprintf('%0.4f',$maxPPM25);
					// 	echo $maxPPM25;
					// }
					
					// echo $ssso2;
					// if(is_numeric(str_replace('.','',$pm25))){
					// 	$pm25 = sprintf('%0.4f',$pm25);
					// 	echo $pm25;
					// }
					//  
					if ($ssso2 < $minSO2) {
						echo "<p style='color:green'>SO<sub>2</sub>=$ssso2</p>";
					}
					elseif ($ssso2 >= $minSO2 && $ssso2 < $maxSO2 ){
						echo "<p style='color:orange'>SO<sub>2</sub>=$ssso2</p>";
					}
					else {
						echo "<p style='color:red'>SO<sub>2</sub>=$ssso2</p>";
					}
					// no2
					if ($ssno2 < $minNO2) { 
						echo "<p style='color:green'>NO<sub>2</sub>=$ssno2</p>";
					}
					elseif ($ssno2 >= $minNO2 && $ssno2 < $maxNO2 ){
						echo "<p style='color:orange'>NO<sub>2</sub>=$ssno2</p>";
					}
					else {
						echo "<p style='color:red'>NO<sub>2</sub>=$ssno2</p>";
					}
					// co
					if ($ssco < $minCO) {
						echo "<p style='color:green'>CO=$ssco</p>";
					}
					elseif ($ssco >= $minCO && $ssco < $maxCO ){
						echo "<p style='color:orange'>CO=$ssco</p>";
					}
					else {
						echo "<p style='color:red'>CO=$ssco</p>";
					}
					// ppm2.5
					if ($ssppm25 < $minPPM25) {
						echo "<p style='color:green'>PPM2.5=$ssppm25</p>";
					}
					elseif ($ssppm25 >= $minPPM25 && $ssppm25 < $maxPPM25 ){
						echo "<p style='color:orange'>PPM2.5=$ssppm25</p>";
					}
					else {
						echo "<p style='color:red'>PPM2.5=$ssppm25</p>";
					}
					// ppm10
					if ($ssppm10 < $minPPM10) {
						echo "<p style='color:green'>PPM10=$ssppm10</p>";
					}
					elseif ($ssppm10 >= $minPPM10 && $ssppm10 < $minPPM10 ){
						echo "<p style='color:orange'>PPM10=$ssppm10</p>";
					}
					else {
						echo "<p style='color:red'>PPM10=$ssppm10</p>";
					}

					// // so sanh

				}
				?>    
			</div>
			
			<div id="wrap_main">
				<script src="ajaxDiv.js"></script>	
				<script type="text/javascript">ajaxFunction();</script>
			</div>			
			
        </div> 
        <!-- <script src="ajaxDiv.js"></script> -->
		<div id="map"></div>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAO3qz7li_N7ZM1JkzyUjRnrOF4Dsj3RQ4&callback=initMap"></script>
		<script type="text/javascript">
			var markers = [];
			var map;

			function initialize() {
				map = new google.maps.Map(
					document.getElementById("map"), {
						center: new google.maps.LatLng(16.073224, 108.151963),
						zoom: 15,
						mapTypeId: google.maps.MapTypeId.ROADMAP
					});
				var marker=[];
				var i=0;
				var status=[];
				var myLatlng=[];
				var color=[];
				var label=[];
				var infowindow=[];	
											
    							status[i] = "0";
    							myLatlng[i] = new google.maps.LatLng("16.075805", "108.153052");
    							color[i] = "green";
    							label[i] = "2";
    							i++;
    													
    							status[i] = "0";
    							myLatlng[i] = new google.maps.LatLng("16.075602", "108.152052");
    							color[i] = "green";
    							label[i] = "1";
    							i++;
    													
    							// status[i] = "1";
    							// myLatlng[i] = new google.maps.LatLng("16.065195", "108.161532");
    							// color[i] = "yellow";
    							// label[i] = "3";
    							// i++;
    													
    							// status[i] = "2";
    							// myLatlng[i] = new google.maps.LatLng("16.065814", "108.160245");
    							// color[i] = "red";
    							// label[i] = "4";
    							// i++;
    									    for (i = 0; i < 2; i++){
				    marker[i] = new google.maps.Marker({
	                    position: myLatlng[i],
	                    label: label[i],
						icon: {
							url: 'http://maps.google.com/mapfiles/ms/icons/' + color[i] + '.png',
							labelOrigin: new google.maps.Point(15, 10)
						},
	                    map: map,
	                    title: 'Node '+ i.toString()
                	});
				}
				for (i = 0; i < 2; i++){
					if (i==1) {
						infowindow = new google.maps.InfoWindow({
					    content: '',
					    position : myLatlng[i]
					  });
					}						
				}
				for (i = 0; i < 4; i++){
					marker[i].addListener('click', function() {
					infowindow.open(map, marker[i]);
					 });
				}
			}
			google.maps.event.addDomListener(window, "load", initialize);
        </script>
        <div id="footer">		
			<center>				
			<div id="project1"><b>&copy; Nguyen Ha Phuc Bao - 16DTCLC1 - Graduation Project</b></div>			
			</center>
		</div>			
    </body>
</html>
