<?php
    $total = 125;

    echo "Su factura es de {$total}";

    if($total > 100){
        $total = $total *1.21;
        echo "Debe pagar mas impuesto: $total";
    }
