<?php

    require("Logic/CreateMichis.php");

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <ul>
            <li> <?= $mrmichi->getName() ?> dice <?= $mrmichi->sayMeow() ?></li>
            <li> <?= $lion->getName() ?> dice <?= $lion->sayMeow() ?></li>
            <li> <?= $orion->getName() ?> dice <?= $orion->sayMeow() ?></li>
        </ul>
    </body>
</html>