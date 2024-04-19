<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <scrip src="../index.js"></scrip>
    <?php
        require ("pages/pageIconStyle.php");
        echo $styleLink;
        echo $iconLink;
        // echo $scriptLink;
    ?>
    <title>Smart Watch Shop</title>
</head>
<body>
    <div class="container_Explore">
        <button type="submit" class="btn-left" onclick="precedentImg"><i class="fa-solid fa-chevron-left"></i></button>
        <ul class="gallery-image">
            <li>
                <img src="./src/images/smart watch/bg remove/watcher (1).png" alt="" class="">
            </li>
            <li>
                <img src="./src/images/smart watch/bg remove/watcher (2).png" alt="" class="">
            </li>
            <li>
                <img src="./src/images/smart watch/bg remove/watcher (3).png" alt="" class="">
            </li>
            <li>
                <img src="./src/images/smart watch/bg remove/watcher (4).png" alt="" class="">
            </li>
            <li>
                <img src="./src/images/smart watch/bg remove/watcher (5).png" alt="" class="">
            </li>
        </ul>
        <button type="submit" class="btn-right" onclick="suivantImg"><i class="fa-solid fa-chevron-right"></i></i></button>
            
    </div>
</body>
</html>