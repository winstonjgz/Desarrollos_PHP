<?php

$t = "<br>";
$clave = "HolaMundo123";

echo md5($clave).$t;
echo hash("md5", $clave).$t;
echo sha1($clave).$t;
echo hash("sha1", $clave).$t;


//Se observan todos los algoritmos que soporta la funcion
foreach(hash_algos() as $algoritmo){
    echo "Con algoritmo: ".$algoritmo." -> ".hash($algoritmo, $clave).$t;
}


