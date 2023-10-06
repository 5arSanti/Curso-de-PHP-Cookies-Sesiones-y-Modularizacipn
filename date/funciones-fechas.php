<?php

    //Establecer la zona horaria
    date_default_timezone_set("America/Bogota");

    //Obtener la fecha actual
    $now = date("d/m/Y H:i:s");
    // echo $now;

    // $now = date_create();
    // echo $now;

    //strtotime => Transforma cadena de texto a formato time Unix
    // echo strtotime($now);
    // echo strtotime("17 April 2022");
    // echo strtotime("+1 week");
    // echo strtotime("next Monday");
    // echo strtotime("last Wednesday");

    // $unix_time_last_wednesday = strtotime("last Wednesday");
    // echo date("d/m/Y H:i:s", $unix_time_last_wednesday);

    // //Fechas inmutables
    // $date_inmutable = new DateTimeImmutable();


    //Diferencia de tiempo
    // $today = new DateTime();
    // $mrmichi_birth = new DateTime("18-08-2005");
    // $interval = $mrmichi_birth->diff($today);
    // echo $interval->format("%y años con %d dias");


    //Crear desde un fromato dado
    // $date = DateTime::createFromFormat("l j F Y", "Sunday 17 April 2022");
    // echo $date->format("d/m/Y H:m:s");


    //Modificar una fecha
    $date = new DateTime();
    $date->modify("+1 day +2 months");
    echo $date->format("d/m/Y");