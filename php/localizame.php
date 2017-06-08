<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
 	<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
	<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
	<link rel="stylesheet" href="../css/style2.css">
</head>
<body>


<div id="map" class="mapa"></div>
		<br><br>
	    <input type="text" disabled name="lat_pers" id="lat_pers" placeholder="latitude" readonly="readonly" />
	    <input type="text" disabled name="long_pers" id="long_pers" placeholder="longitude" readonly="readonly" />
	    <br>
	    
	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlvO6QnueCJUrb3yhqmEWDVb6CeIsdOvk&callback=initMap"></script>
	<script src="../js/index.js"></script>
</body>
</html>