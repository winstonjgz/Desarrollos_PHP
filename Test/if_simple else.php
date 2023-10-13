<?php
    $total = 25;

    echo "Su factura es de {$total}";

    if($total > 100){
        $total1 = $total *1.21;
        echo "Debe pagar mas impuesto: $total1";
    }else{
        echo "Debe pagar sin impuesto: $total";
        
    }
