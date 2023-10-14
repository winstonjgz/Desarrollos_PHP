<?php

$t = "<br>";
//El primer paso es obtener la zona horaria donde se esta ubicado
date_default_timezone_set("America/Santiago");

//Posteriormente se puede usar la funcion date

$fecha_us = date("Y");
echo $fecha_us.$t;

$fecha_us = date("Y-");
echo $fecha_us.$t;

$fecha_us = date("Y/m/d");
echo $fecha_us.$t;

$fecha_us = date("Y ");
echo $fecha_us.$t;

$fecha_am = date("d-m-Y");
echo $fecha_am.$t;

$fecha_am = date("l d-m-Y");
echo $fecha_am.$t;

$hora_12 = date("h:i a");
$hora_24 = date("H:i");
echo $hora_12.$t;
echo $hora_24.$t;