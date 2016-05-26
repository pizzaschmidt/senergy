<!DOCTYPE html>
<html>
    <head>
        <?php include "includes/header.php"; ?>
        <link rel="stylesheet" href="css/index.css" type="text/css" />
    </head>
<body>
    <!--Begin nav-->
    <?php include "includes/mainnav.php";?>
    <!--End nav-->
    
    <!-- Begin Map Code -->
    <div id="map"></div>
    <!-- End Map Code -->
    
    <!-- Begin footer -->
    <?php include "includes/footer.php" ?>
    <!--End footer-->
</body>
<script type="text/javascript" src="">
    <?php
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts = parse_url($url);
        $path_parts = explode('/', $parts['path']);
        $page = strval($path_parts[1]);
    ?>
    
    var pages = ["index.1.php", "about.php", "contact.php", "services.php"];
    var current_page = <?php echo $page ?>;
    
    switch (String(current_page)) {
        case "index.1.php":
            alert("fuck");
            break;
        case "about.php":
            break;
        case "contact.php":
            break;
        case "services.php":
            break;
    }
</script>
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
