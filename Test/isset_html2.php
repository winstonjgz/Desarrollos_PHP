<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="numero" id="numero">
        <button type="submit">Enviar</button>
    </form>

    <?php
        if(isset($_POST['numero']) && $_POST['numero']!=""){
    
            include "for_html2.php";
        }
    ?>

</body>
</html>