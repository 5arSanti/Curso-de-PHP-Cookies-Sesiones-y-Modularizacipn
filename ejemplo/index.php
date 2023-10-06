<?php 
    setcookie(
        name: "header_color",
        value: "#12373d",
    );

    $color = $_COOKIE["header_color"] ?? "#121f3d;";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="./styles.css" type="text/css">
        <title>Platzi</title>
    </head>

    <body>
        <header style="background: <?= $color ?> ;">
            <img src="./logo.webp" alt="platzi-logo">
        </header>
    </body>
</html>