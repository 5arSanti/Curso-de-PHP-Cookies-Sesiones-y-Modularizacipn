<?php 

    session_start();
    $users = [
        [
            "username" => "5ar_Santi",
            "email" => "santiari05@hotmail.com",
            
        ],
        [
            "username" => "Lion",
            "email" => "LionBello@test.com",
            
        ],
    ];

    $user = $_GET["user"] ?? "";

    echo "El usuario elejdio es: " . $users[$user]["username"];

    $_SESSION["id"] = $user;
    $_SESSION["username"] = $users[$user]["username"];
    $_SESSION["email"] = $users[$user]["email"];

    header("./index.php", true );