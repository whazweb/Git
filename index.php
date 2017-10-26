<!DOCTYPE html>
<html>
  <head>
   <link rel="stylesheet" href="leaflet.css" />
   <link rel="stylesheet" href="style.css" />
    <script src="leaflet.js"></script>
    <meta charset="utf-8">
    <title>Carte interactive Siblu</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head> 
  <body>
<div id="content">
<div id="map"></div>
 <div id="data">
            <h1>Carte Interactive</h1>
            <label>Date de départ</label><br>Calendrier<br>            
        </div>
    </div>
<script>
	var mymap = L.map('map').setView([46.860191, 2.438965], 6);
<!-- Autre carte https://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png-->

	L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/watercolor/{z}/{x}/{y}.png', {
		maxZoom: 10,
		minZoom: 4,
		attribution: 'Map data &copy; <a target="_blank" href="http://siblu.com">Siblu</a> contributor, ' +
			'Eddy VUILLAUME' ,
		id: 'mapbox.streets'
	}).addTo(mymap);
	var customPopup = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ornare ex eget leo sagittis, et ultricies mauris congue. Phasellus a lectus dui. Phasellus ut elit eget elit vehicula eleifend a non est. Praesent ut augue sit amet nunc volutpat varius. Donec non risus et massa accumsan sagittis eu eget est. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum rutrum dapibus mi quis efficitur. Praesent eu mauris laoreet, lacinia felis eu, porta urna. Donec sed ultricies quam.";
	var customOptions =
        {
        'maxWidth': '10vh',
        'className' : 'custom'
        }
	L.marker([44.84, -0.59]).bindPopup(customPopup,customOptions).addTo(mymap);
</script>
  </body>
</html>