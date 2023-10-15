<?php
$t = "<br>";

$numero; //Se considera nula cuando es predefinida o no tiene un valor
if(is_null($numero)){
    echo 'Es nula'.$t;
}else{
    echo 'No es nula'.$t;
}

echo $t;

//funcion unset elimina la variable
$numero = NULL;
if(is_null($numero)){
    echo 'Es nula'.$t;
}else{
    echo 'No es nula'.$t;
}

echo $t;

$numero = "9";
unset($numero);
if(is_null($numero)){
    echo 'Es nula'.$t;
}else{
    echo 'No es nula'.$t;
}

echo $t;

//funcion empty es cuando es "", 0, null, false, "0", array vacio, 0.0

$numero = "9";

if(empty($numero)){
    echo 'Es vacia'.$t;
}else{
    echo 'No es vacia'.$t;
}

echo $t;

if(isset($numero)){
    echo 'Esta definida'.$t;
}else{
    echo 'No esta definida'.$t;
}

echo $t;
