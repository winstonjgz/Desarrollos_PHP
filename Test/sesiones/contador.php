<?php
    session_name("LOGIN");
   // session_id("PHP"); <?php echo session_id(); con esto en el body vemos quien tiene el id de la sesion
    session_start();
    if(isset($_SESSION['contador'])){
        $_SESSION['contador']++;
    }else{

        $_SESSION['contador'] = 1;
    }
    
?>

<!--Las sesiones se inician al principio del HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php echo "Bienvenido ".$_SESSION['Nombre'];?>
    <br><br>
    <a href="index_login.php">
        Inicio
    </a>
    <br><br>
    <a href="cerrar.php">
        Cerrar Sesion
            
    </a>
    <br><br>
    
</body>
</html>