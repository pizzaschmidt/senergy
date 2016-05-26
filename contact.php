<!DOCTYPE html>
<html>
    <head>
        <?php include "includes/header.php"; ?>
        <link rel="stylesheet" href="css/contact.css" type="text/css" />
    </head>
    <body>
        <?php include "includes/mainnav.php"; ?>
        <!--Begin Snazzy-->
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
        <!--End Snazzy-->
        
        <!-- Begin Map -->
        <div id="map"></div>
        <!-- End Map -->
        
        <!-- Begin footer -->
        <?php include "includes/footer.php"; ?>
        <!-- End footer -->
    </body>
</html>