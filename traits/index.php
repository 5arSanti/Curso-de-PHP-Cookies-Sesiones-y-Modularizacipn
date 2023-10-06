<?php
    require("vendor/autoload.php");

    use App\Classes\Perritu;
    use App\Classes\Michi;

    $firulais = new Perritu();
    $lion = new Michi();

    echo $firulais->bark() . "\n";
    echo $firulais->play() . "\n";

    
    echo $lion->sayMeow() . "\n";
    echo $lion->play() . "\n";
