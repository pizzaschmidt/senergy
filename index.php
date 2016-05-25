<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300italic|Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>
<style type="text/css">
/*GLOBAL*/
/*COmment again, delete me*/
body {
	width: 100vw;
	height: 100vh;
	padding: 0;
	margin: 0;
	font-family: 'Oswald', sans-serif;
	overflow: auto;
	color: white;
}
a {
 	text-decoration: none;
}
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}
ul div {
	float: left;
	margin: 0;
}
nav {
 	height: 100px;
 	width: 100%;
 	background-color: #252525;
 	vertical-align: middle;
}
#menu  {
	float: right;
	margin-right: 150px;
}
nav img {
	width: 300px;
	float: left;
	margin-left: 150px;
	margin-top: 12px;
}
#menu span {
	line-height: 100px;
}
#menu span a {
	color: white;
	transition: color 0.3s ease;
}
#menu span a:hover {
	color: #6AB7D1;
}
#menu span:nth-child(2) {
	margin: 0 35px 0 35px;
}
#phone_number {
	width: 100%;
	height: 35px;
	background-color: #00aeef;
	box-shadow: 0 3px 10px #333;
}
#phone_number span {
	float: right;
	margin-right: 150px;
	line-height: 35px;
	color: #252525;
}


#drop {
	background-color: green;
	transition: height 0.3s ease;
}
#map {
	width: 100%;
	height: calc(100vh - 385px);
}
.drop-open {
	height: 200px;
	width: 100%;
}


#map div span {
	display: block;
	text-align: center;
	font-size: 1.5em;
	color: #252525;
	font-family: 'Open Sans', sans-serif;
	font-weight: 400;
}

/*** Footer ***/
footer {
	width: 100%;
	height: 250px;
	border: 0;
	margin: 0;
	padding: 0;
	background-color: #252525;
	position: relative;
	bottom: 0;
	vertical-align: middle;
}
footer #social-logo-wrap {
	width: calc(100% - 4px);
    text-align: center;
    height: 150px;
    display: inline-block;
    vertical-align: middle;
}
footer .helper {
	display: inline-block;
	height: 100%;
	width: 0;
	vertical-align: middle;
}
footer img {
	height: 150px;
	margin: 0 10px;
	opacity: 0.7;
	transition: opacity 0.2s ease;
}
footer img:hover {
	opacity: 1;
}
</style>
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
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3320.2124278009514!2d-117.88838168479482!3d33.677563280709485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dcdf1bc16893b1%3A0xd32e59f4921594fd!2s2930+Bristol+St%2C+Costa+Mesa%2C+CA+92626!5e0!3m2!1sen!2sus!4v1449098971260" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- End Map Code -->

<!-- Begin Footer Code -->
<footer>
	<div class="helper"></div>
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
