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