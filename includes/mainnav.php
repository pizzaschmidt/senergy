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