<?php
$t = "<br>";
function saludo($nombre){
    return "Hola como estas! $nombre";
}

//$saludo=saludo("Hanna");
//saludo();
//saludo();

echo saludo("Hanna").$t;

$saludo=saludo("Diana");

echo saludo($saludo).$t;

echo saludo($saludo="Nadia").$t;



function promedio_alumno($nota1, $nota2, $nota3){
    $promedio = ($nota1+$nota2+$nota3)/3;
    return $promedio;
}

$promedio = promedio_alumno(7,10,8);

echo "El promedio es: $promedio".$t;




