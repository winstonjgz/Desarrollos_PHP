<?php

$t = "<br>";

$cantidad_1 = 1233151.77;
$cantidad_2 = 515.88;


//number_format( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )
echo number_format($cantidad_1).$t;

echo number_format($cantidad_1,2,",",".").$t;

echo number_format($cantidad_2,3,",",".").$t;
