<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/global.css" type="text/css">
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>

<!-- Script for Snazzy Maps Begin -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
        
<script type="text/javascript">
    // When the window has finished loading create our google map below
    google.maps.event.addDomListener(window, 'load', init);

    function init() {
        // Basic options for a simple Google Map
        // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
        var mapOptions = {
            // How zoomed in you want the map to start at (always required)
            zoom: 10,

            // The latitude and longitude to center the map (always required)
            center: new google.maps.LatLng(33.9533, -117.3962), // Riverside

            // How you would like to style the map. 
            // This is where you would paste any style found on Snazzy Maps.
            styles: [{"stylers":[{"hue":"#ff1a00"},{"invert_lightness":true},{"saturation":-100},{"lightness":33},{"gamma":0.5}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#2D333C"}]}]
        };

        // Get the HTML DOM element that will contain your map 
        // We are using a div with id="map" seen below in the <body>
        var mapElement = document.getElementById('map');

        // Create the Google Map using our element and options defined above
        var map = new google.maps.Map(mapElement, mapOptions);
    }
</script>
<!-- Snazzy Maps End -->

<body>
	
<nav>
	<img src="imgs/senergy.png">
	<div id="menu">
		<span><a href="about.php">ABOUT</a></span>
		<span id="services"><a href="services.php">SERVICES</a></span>
		<span><a href="contact.php">CONTACT</a></span>
	</div>
</nav>
<div id="drop"></div>
<div id="phone_number"><span>CALL NOW: (844) 330-7517</span></div>

<!-- Begin Map Code -->
<div id="map"></div>
<!-- End Map Code -->

<!-- Begin Footer Code -->
<footer>
	<div id="social-logo-wrap">
		<a href="https://www.linkedin.com/in/anthony-torres-40a9a389" target="_blank"><img src="imgs/logos/linkedin-color-med.png"></img></a>
		<a href="https://www.facebook.com/Senergyair/" target="_blank"><img src="imgs/logos/facebook-color-med.png"></a>
		<a href="http://www.yelp.com/biz/senergy-heating-and-air-conditioning-riverside-2" target="_blank"><img src="imgs/logos/yelp-color-med.png"></a>
	</div>
</footer>
<!-- End Footer Code -->
</body>
<script type="text/javascript">
	$(document).ready(function() {
		//toggles drop down menu
		var toggleState = true;
		$('#services').on("click", function() {
  		if(toggleState) {
    		$("#drop").addClass("drop-open");
  		} else {
    		$("#drop").removeClass("drop-open");
  		}
  		toggleState = !toggleState;
		});
	});
</script>
</html>
