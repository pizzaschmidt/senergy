<div id="header">
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
</div>
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