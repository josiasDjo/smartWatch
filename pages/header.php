<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        require_once("pageIconStyle.php");
        echo $styleLink;
        echo $iconLink;
    ?>
    <title>Smart Watch Shop</title>
</head>
<body>
    <header>
        <img src="./src/images/images.png" alt="logo">
        <ul class="subject">
            <li>Home</li>
            <li>Explore</li>
            <li>Blog</li>
            <li>About</li>
            <li>Contact</li>
        </ul>

        <ul class="iconSearch">
            <input type="text" placeholder="Search">
            <i class="fa-solid fa-magnifying-glass"></i>
        </ul>
    </header>
</body>
</html>