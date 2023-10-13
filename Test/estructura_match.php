<?php

    $a = 77;
    $b = 15;
    $c = 35;
    $d = 27;

    //compara con variable y tipo de dato
    $resultado = match($a){
        $b => "Valor igual a $b",
        $c => "Valor igual a $c",
        $d => "Valor igual a $d",
        default => "ninguno es igual a $a"
    };

    echo $resultado;
