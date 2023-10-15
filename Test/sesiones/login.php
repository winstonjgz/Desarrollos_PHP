<?php

    if(!preg_match("/^[a-zA-Z@.]{8,20}$/",$_POST['usuario'])){
        echo "El usuario no coincide con el formato solicitado!";
        exit();
    }


    if(!preg_match("/^[a-zA-Z0-9$.-#]{8,32}$/",$_POST['password'])){
        echo "El password no coincide con el formato solicitado!";
        exit();
    }

    if($_POST['usuario']=="Hanasapfiori" && $_POST['password']=="1234Ab5678#"){
        session_name("LOGIN");
        session_start();
        $_SESSION['Nombre'] = "Hana";
        $_SESSION['Apellido'] = "Abap";
        $_SESSION['Cargo'] = "CEO";

        
        if(headers_sent()){
            echo "<script>
        window.location.href='index_login.php';
         </script>";
        }else{
            header("Location: contador.php");
        }
        //echo "Sesion Iniciada";
    }else{
        echo "Datos incorrectos";
    }