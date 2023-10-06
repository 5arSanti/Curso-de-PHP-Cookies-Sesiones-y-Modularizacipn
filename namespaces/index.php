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
            <li> <?= $mrmichi->getName() ?> fue adoptado por: <?= $mrmichi_adopted->getAdoptedBy() ?> el dia <?= $mrmichi_adopted->getDateAdopted()->format("d/m/Y") ?></li>
            <li> <?= $lion->getName() ?> fue adoptado por: <?= $lion_adopted->getAdoptedBy() ?> el dia <?= $lion_adopted->getDateAdopted()->format("d/m/Y") ?></li>
            <li> <?= $orion->getName() ?> fue adoptado por: <?= $orion_adopted->getAdoptedBy() ?> el dia <?= $orion_adopted->getDateAdopted()->format("d/m/Y") ?> </li>
        </ul>
    </body>
</html>