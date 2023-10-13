<?php
$array_ex = ["Parada_1", "Parada_2", "Parada_3", "Parada_4", "Parada_5", "Parada_6", "Parada_7"];


foreach($array_ex as $valor){
    echo $valor."<br>";
    if ($valor == "Parada_5"){
        break;
    }

}

