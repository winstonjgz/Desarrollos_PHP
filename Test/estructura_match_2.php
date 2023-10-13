<?php

    $edad = 38;
    
    //compara con variable y tipo de dato
    $resultado = match(true){
        $edad >= 60 => "Tercera edad",
        $edad >= 40 => "Segunda edad",
        $edad >= 20 => "Primera edad",
        default => "Es niño"
    };

    echo $resultado;