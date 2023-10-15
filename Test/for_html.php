<?php
$numero = ($_POST['numero']);
echo "La tabla del $numero es:"."<br>";

if(isset($_POST['numero']) && $_POST['numero']!=""){
    
    for($i=1; $i<=10; $i++){
        
        echo "$i X $numero = ".$i*$numero."<br>";
    }
}else{
    echo 'No definida'."<br>";
}