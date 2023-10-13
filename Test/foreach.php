<?php

//Se usa para recorrer un array
$array_ex = ["Parada_1", "Parada_2", "Parada_3", "Parada_4", "Parada_5", "Parada_6", "Parada_7"];

$array_nox = [
    "Non Parada_1" => 100, 
    "Non Parada_2" => 1000, 
    "Non Parada_3" => 10000, 
    "Non Parada_4" => 100000, 
    "Non Parada_5" => 1000000, 
    "Non Parada_6" => 10000000, 
    "Non Parada_7" => 100000000
];
"<br>";

// al colocar as $variable es cualquier nombre
foreach($array_ex as $valor){
    echo $valor."<br>";
};

"<br>";

foreach($array_ex as $id => $valor){
    echo $id." ".$valor."<br>";

}

"<br>";
foreach($array_nox as $id => $valor){
    echo "Hay $valor en $id del banco"."<br>";

}

"<br>";

$array_pc = [
    ["codigo" => "A001", "descripcion" => "Mouse"],
    ["codigo" => "A002", "descripcion" => "Teclado"],
    ["codigo" => "A003", "descripcion" => "Pantalla"],
    ["codigo" => "A004", "descripcion" => "Impresora"],
    ["codigo" => "A005", "descripcion" => "CPU"],
];
"<br>";

foreach($array_pc as $valor){
    echo "El codigo {$valor["codigo"]} tiene el equipo {$valor["descripcion"]}"."<br>";

}




