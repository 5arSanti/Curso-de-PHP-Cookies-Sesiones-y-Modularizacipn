<?php

    //Por precedimientos - estrcturada
    // $date = date_create();
    // $intervalo = date_interval_create_from_date_string("5 days");
    // date_add($date, $intervalo);
    // echo date_format($date, "Y-m-d");


    //Programacion orientada a objetos
    $date = new DateTime();
    $interval = DateInterval::createFromDateString("5 days");
    $date->add($interval);
    echo $date->format("Y-m-d");