<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index1.php" method="POST" >
        <div>
            <label for="nombre">
            Nombre:     
            </label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <br>
        <label for="asignatura">Asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana" name="frutas" id="opcion-1">
            Manzana
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>