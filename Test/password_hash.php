<?php

//Se debe usar esta funcion para procesar correctamente las contraseñas en las BD.
$t = "<br>";

$clave = "HolaMundo123";

echo password_hash($clave, PASSWORD_DEFAULT).$t;

echo password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]).$t;

$clave_procesada = password_hash($clave, PASSWORD_BCRYPT, ["cost"=>11]);


if(password_verify($clave, $clave_procesada)){
    echo "Las claves coinciden!!".$t;
};

$clave = "12345";

if(password_verify($clave, $clave_procesada)){
    echo "Las claves coinciden!!".$t;
}else{
    echo "Las claves no coinciden!".$t;
};
