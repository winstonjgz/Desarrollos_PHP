<?php

$fecha_1 = "2023/10/12";
$fecha_2 = "2023-10-14";

$numeros = "Uno Dos Tres Cuatro Cinco Seis Siete";

//'explode' es parecido al 'split' 
$array_fecha = explode("/", $fecha_1);

echo $array_fecha[1]."<br>";

$array_fecha2 = explode("-", $fecha_2);

echo $array_fecha2[2]."<br>";


$array_numeros = explode(" ", $numeros);

echo $array_numeros[5]."<br>";

$array_numeros1 = explode(" ", $numeros,3);

echo $array_numeros1[2]."<br>";


// si se coloca -1 excluye el ultimo
$array_numeros1 = explode(" ", $numeros,-1);

echo $array_numeros1[2]."<br>";
echo str_word_count($numeros)."<br>";

for ($i = 0; $i < str_word_count($numeros)-1; $i++){
    echo $array_numeros1[$i]."<br>";
}
