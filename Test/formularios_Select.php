<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index3.php" method="POST" >
        <div>
            <label for="nombre">
            Nombre:     
            </label>
            <input type="text" name="nombre" id="nombre">
        </div>
        <br>
        <label for="asignatura">Asignatura</label>
        <select name="asignatura[]" id="asignatura" multiple>
            <option value="Ingles">Ingles</option>
            <option value="Matematicas">Matematicas</option>
            <option value="Ciencia">Ciencia</option>
            <option value="Lenguaje">Lenguaje</option>
        </select>
        <br>
        <label for="opcion-1">
            <input type="checkbox" value="Manzana1" name="frutas[]" id="opcion-1">
            Manzana 1
        </label>
        <label for="opcion-2">
            <input type="checkbox" value="Manzana2" name="frutas[]" id="opcion-2">
            Manzana 2
        </label>
        <label for="opcion-3">
            <input type="checkbox" value="Manzana3" name="frutas[]" id="opcion-3">
            Manzana 3
        </label>
        <label for="opcion-4">
            <input type="checkbox" value="Manzana4" name="frutas[]" id="opcion-4">
            Manzana 4
        </label>
        <label for="opcion-5">
            <input type="checkbox" value="Manzana5" name="frutas[]" id="opcion-5">
            Manzana 5
        </label>
        <br><br><br>
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>