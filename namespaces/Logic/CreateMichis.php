<?php

    require("Classes/MichisDisponibles/Michi.php");
    require("Classes/MichisAdoptados/Michi.php");

    use MichisDisponibles\Michi;
    use MichisAdoptados\Michi as MichisAdoptados;

    $mrmichi = new Michi("Mr.Michi", "blanco", "1");
    $lion = new Michi("Lion", "Naranja", "7");
    $orion = new Michi("Orion", "Naranja con blanco", "4");


    $mrmichi_adopted = new MichisAdoptados("Mr.Michi", new DateTime("2023-10-6"), "Santi");
    $lion_adopted = new MichisAdoptados("Lion", new DateTime("2023-10-6"), "Santi");
    $orion_adopted = new MichisAdoptados("Orion", new DateTime("2023-10-6"), "Santi");