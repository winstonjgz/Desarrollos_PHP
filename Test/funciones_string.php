<?php

$cadena_texto1 = "Hola a todos";

echo strtolower($cadena_texto1)."<br>";

echo strtoupper($cadena_texto1)."<br>";

$cadena_texto =  strtolower($cadena_texto1);

echo ucfirst($cadena_texto)."<br>";

echo ucwords($cadena_texto)."<br>";

$longitud_texto = strlen($cadena_texto);
//Contar caracteres
echo $longitud_texto."<br>";

echo str_word_count($cadena_texto)."<br>";
