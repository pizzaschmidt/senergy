<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
</head>
<style type="text/css">
/*GLOBAL*/
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
	width: 100%;
	height: 100px;
	background-color: green;
}
#map {
	width: 100%;
	height: 500px;
	background-image: url("imgs/map.jpg");
	background-size: cover;
}
</style>
<body>
<nav>
	<img src="imgs/senergy.png">
	<div id="menu">
		<span><a href="#">ABOUT</a></span>
		<span><a href="#">SERVICES</a></span>
		<span><a href="#">CONTACT</a></span>
	</div>
</nav>
<div id="drop"></div>
<div id="phone_number"><span>CALL NOW: (951) 666-1738</span></div>


<div id="map">
	
</div>
</body>
<script type="text/javascript">
	$(document).ready(function() {
		$("#menu span a:nth-child(2)").click(function(
			
			);
		);
	});
</script>
</html>#00aeef