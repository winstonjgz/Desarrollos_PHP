<!--Las cookies se crean antes del codigo HTML-->
<?php
    //setcookie("Nombre", valor, expiracion, dir, dominio, secure, httponly);
    //time 60 segundos por horas
    // al colocar "/" la cookie estara disponible en la carpeta global, se le puede indicar la carpeta del servidor especifica
    setcookie("Idioma", "es",time()+60*1, "/","localhost",true);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos</h1>
    <h1><?php echo $_COOKIE['idioma']; ?></h1>
</body>
</html>