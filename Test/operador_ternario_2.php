<?php
    $precio = 335;
    $cantidad = 5;

    $total = $precio * $cantidad;

    $respuesta =($total>1000)?  $total*(.8) :  $total*1.20;
    echo "El total a pagar es $respuesta";
