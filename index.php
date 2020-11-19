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
	<script type="text/javascript">ajaxFunction();
		function ajaxSetTDS(){
		   var ajaxRequest;  // Khai bao mot bien
		   try{		   
		      // Voi cac trinh duyet hien dai: Opera 8.0+, Firefox, Safari
		      ajaxRequest = new XMLHttpRequest();
		   }catch (e){
		      try{
		         ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		      }catch (e) {
		         
		         try{
		            ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
		         }catch (e){
		         
		            // Thong bao khi xay ra loi
		            alert("Co loi xay ra voi trinh duyet cua ban!");
		            return false;
		         }
		      }
		   }
		   ajaxRequest.onreadystatechange = function(){
		   
		      if(ajaxRequest.readyState == 4){
		         var ajaxDisplay = document.getElementById('ajaxKQ');
		         ajaxDisplay.innerHTML = ajaxRequest.responseText;
		      }
		   }	   
		   var timerD = document.getElementsByName('timer');
		   var timeReturn = 30;
		   for(var i = 0, length = timerD.length; i < length; i++){
		       if(timerD[i].checked){
		           timerReturn = timerD[i].value;
		       }
		   }
		//    var clearD = document.getElementsByName('clear');
		//    var clearReturn = 3;
		//    for(var i = 0, length = clearD.length; i < length; i++){
		//        if(clearD[i].checked){
		//            clearReturn = clearD[i].value;
		//        }
		//    }
		   
		//    var backupD = document.getElementsByName('backup');
		//    var backupReturn = 0;
		//    for(var i = 0, length = backupD.length; i < length; i++){
		//        if(backupD[i].checked){
		//           backupReturn = backupD[i].value;
		//        }
		//    }
		   
		//    var phoneD = document.getElementsByName('phone');
		//    var phoneReturn = 0976742314;
		//    for(var i = 0, length = phoneD.length; i < length; i++){
		//        if(phoneD[i].checked){
		//           phoneReturn = phoneD[i].value;
		//        }
		//    }
		   var queryString = "setRequest.php?timer=" + timerReturn + "&maxPPM25=" + maxPPM25;// ECHO DOC DATA TỪ WEB XUỐNG-> LOAD FILE setrequest.php
		   ajaxRequest.open("GET", queryString , true);
		   ajaxRequest.send(null); 
		}
	</script>
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
