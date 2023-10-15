<?php
    session_name("LOGIN");
   
    session_start();

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="login.php" method="POST">
        <label for="">Usuario</label>
        <input type="text" name="usuario" id="usuario" pattern="[a-zA-Z@.]{8,20}" maxlength="20">
        <!--Se introducen de minimo 8 hasta 20-->
        <br>
        <label for="">Password</label>
        <input type="password" name="password" id="password" pattern="[a-zA-Z0-9$._#]{8,32}" maxlength="32">
        <br><br>
        <button type="submit">Login</button>
    </form>

</body>
</html>