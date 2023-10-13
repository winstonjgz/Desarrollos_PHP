<?php

    $texto = 'Canada';

    $variable_1 = $texto;
    $variable_2 = &$texto;

    echo $variable_1;
    echo $variable_2;

    $texto = 'Italia';

    echo 'La variable 1 es: '.$variable_1;
    echo 'La variable 2 es: '.$variable_2;
    