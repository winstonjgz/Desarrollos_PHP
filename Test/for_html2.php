<?php
$numero = ($_POST['numero']);
echo "La tabla del $numero es:"."<br>";


    for($i=1; $i<=10; $i++){
        
        echo "$i X $numero = ".$i*$numero."<br>";
    }
