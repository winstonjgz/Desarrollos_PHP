<?php
    $nombre = 'Hanna';
    $apellido = 'Abap';

    //Para concatenar se una el punto '.'
    echo $nombre.$apellido;

    $resultado = $nombre.$apellido;
    echo $resultado;

    $pais='Canada';
    echo $resultado.$pais;

// interpolacion de variables 'Solo se hace en textos o strings con comillas dobles'
echo "Mi nombre es: $nombre, mi apellido es $apellido";

//Tambien
echo "Mi nombre es: {$nombre}, mi apellido es {$apellido}";

