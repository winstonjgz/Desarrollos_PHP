
<?php
$t = "<br>";
var_dump($_POST['asignatura']);


foreach($_POST['asignatura'] as $asignatura){
    echo $asignatura.$t;
};

//otro metodo
echo $t;

$materias = $_POST['asignatura'];
foreach($materias as $asignatura){
    echo $asignatura.$t;
};

echo $t;

echo $t;
echo $t;

$cesta_frutas = $_POST['frutas'];

foreach($cesta_frutas as $cesta){
    echo $cesta.$t;
};

