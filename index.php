<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Watch Shop</title>
    <?php 
        require_once("pages/pageIconStyle.php");
        echo $iconLink ."\n";
        echo $styleLink  ."\n";
        // echo $scriptLink ."\n";
    ?>
</head>
<body>
    <?php
        require_once("pages/header.php");
        echo "\n";
        include_once("pages/explore.php");
    ?>
</body>

<script>
    import { gsap } from "gsap";

</script>
</html>