<!DOCTYPE html>
<html>
    <?php 
        include "includes/header.php";
        include "includes/mainnav.php";
    ?>
<body>
    <?php include "includes/footer.php" ?>
</body>
<script type="text/javascript" src="">
    <?php
        $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $parts = parse_url($url);
        $path_parts = explode('/', $parts['path']);
        $page = " $path_parts[1] ";
    ?>
    
    var pages = ["index.1.php", "about.php", "contact.php", "services.php"];
    var current_page = <?php print($page) ?>;
    
    switch (current_page) {
        case "index.1.php":
            alert("fuck");
            break;
        case "about.php":
            alert("fuck");
            break;
        case "contact.php":
            alert("fuck");
            break;
        case "services.php":
            alert("fuck");
            break;
    }
</script>
</html>