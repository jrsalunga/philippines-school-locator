<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>{{ $title }}</title>
<meta name="viewport" content="width=device-width">




{{ HTML::style('css/styles.css') }}



<style type="text/css">
  html, body, #map-canvas { height: 100%; margin: 0; padding: 0;}
</style>
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCz313wZmUVD327unYrq90BJcXwIW0PtGo"></script>
<script type="text/javascript">
  function initialize() {
	var mapOptions = {
	  center: { lat: -34.397, lng: 150.644},
	  zoom: 8
	};
	var map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
  }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
<div id="map-canvas"></div>
	
</body>
</html>