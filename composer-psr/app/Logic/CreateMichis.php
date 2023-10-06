<?php

    use App\Classes\Michi;
    use App\Classes\MichisAdoptados;

    function createMichis() {
        $mr_michi = new Michi("Mr.Michi", "Blanco", 16);
        $mr_michi_adopted = new MichisAdoptados("Mr.Michi", new DateTime("2023-10-7"), "Santiago");
        
        echo $mr_michi->sayMeow() . " Me adopto " . $mr_michi_adopted->getAdoptedBy();
    }