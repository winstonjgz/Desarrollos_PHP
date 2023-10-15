<?php

    if($_POST['usuario']=="Hana" && $_POST['password']=="1234"){
        session_name("LOGIN");
        session_start();
        $_SESSION['Nombre'] = "Hana";
        $_SESSION['Apellido'] = "Abap";
        $_SESSION['Cargo'] = "CEO";

        echo "Sesion Iniciada";
    }else{
        echo "Datos incorrectos";
    }