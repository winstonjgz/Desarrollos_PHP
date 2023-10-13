<?php
    //Arrays escalares
    $estudiantes = array("est1","est2","est3","est4" );

    echo $estudiantes[2];

    //Modificacion valor
    $estudiantes[2]="Claudia";
    echo $estudiantes[2];

    //Con corchetes
    $estudiantes2 = ["est1","est2","est3","est4" ];
    echo $estudiantes2[2];


    //Arrays de tipo asociativo

    $profesor=[
        "Nombre"=> 'SAP', 
        "materia"=>'ABAP', 
        'Costo'=>'USD' 
];

    echo $profesor['Nombre'];
    $profesor['Costo'] = 'EUR';
    echo $profesor['Costo'];


    //Arrays multidimensionales
    $profesor2=[
        "Nombre"=> 'SAP7.0', 
        "materia"=>'ABAP7.0', 
        'Costo'=>'USD7.0' ,
        'Lenguajes'=> ['PHP', 'Python', 'FIORI']
];
    echo $profesor2['Lenguajes'][2];

    $profesor3=[
        "Nombre"=> 'SAP7.0', 
        "materia"=>'ABAP7.0', 
        'Costo'=>'USD7.0' ,
        'Lenguajes'=> ['preferido1'=>'PHP','preferido2'=> 'Python', 'preferido3'=>'FIORI']
];
    echo $profesor3['Lenguajes']['preferido1'];

    $profesor3['Lenguajes']['preferido1']='Java';

    echo $profesor3['Lenguajes']['preferido1'];
    $profesor3['Pais']='Canada';
    echo $profesor3['Pais'];

    echo count($profesor3);
    echo count($profesor3, COUNT_RECURSIVE);
