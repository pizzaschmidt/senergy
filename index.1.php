<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/global.css" type="text/css">
	<link rel="stylesheet" href="css/index.css" type="text/css">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>



<body>
<?php
    include "includes/mainnav.php";
?>
<nav>
	<a href="index.1.php"><img src="imgs/senergy.png"></a>
	<div id="menu">
		<span><a href="about.php">ABOUT</a></span>
		<span id="services"><a href="services.php">SERVICES</a></span>
		<span><a href="contact.php">CONTACT</a></span>
	</div>
</nav>
<div id="drop"></div>
<div id="phone_number"><span>CALL NOW: (844) 330-7517</span></div>

<!-- Begin Map Code -->
<div id="map">
	
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
