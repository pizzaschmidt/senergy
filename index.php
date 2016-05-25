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
		<span><a href="#">ABOUT</a></span>
		<span id="services"><a href="#">SERVICES</a></span>
		<span><a href="#">CONTACT</a></span>
	</div>
</nav>
<div id="drop"></div>
<div id="phone_number"><span>CALL NOW: (844) 330-7517</span></div>

<!-- Begin Map Code -->
<div id="map">
	<!-- MAP INFO
	<div>
		<span>HEATING & AIR CONDITIONING</span>
		<span>6280 Brockton Ave, Riverside, CA 92506</span>
		<span>(821) 121-2212</span>
		<span>Open 24/7 to Members</span>
	</div> -->
	<!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.2124278009514!2d-117.88838168479482!3d33.677563280709485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcdf1bc16893b1%3A0xd32e59f4921594fd!2s2930+Bristol+St%2C+Costa+Mesa%2C+CA+92626!5e0!3m2!1sen!2sus!4v1449098971260" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>-->
</div>
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
