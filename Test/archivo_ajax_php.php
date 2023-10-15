<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>
        Subir archivo con PHP
    </h3>
        <form action="carga_ajax_php.php" method="post" enctype = "multipart/form-data" class="FormularioAjax">
            <input type="file" name="fichero" accept=".jpg, .png, .jpeg"></input>
            <br><br>
            <button type="submit">Enviar</button>
        </br>
        </form>

        <script src="ajax.js"></script>
</body>
</html>