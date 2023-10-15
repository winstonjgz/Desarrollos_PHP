<?php
$t = "<br>";
//echo $_FILES['fichero']['tmp_name'].$t;
//Recordar entre corchetes la variable desde el formulario
/*echo $_FILES['fichero']['name'].$t;
echo $_FILES['fichero']['tmp_name'].$t;//Aqui esta la ruta temporal
echo $_FILES['fichero']['type'].$t; //Tipo de archivo
echo $_FILES['fichero']['error'].$t; //Si fue cargado o no
echo $_FILES['fichero']['size'].$t;  //Tamaño en <bytes></bytes>*/

if(empty($_FILES['fichero']['tmp_name'])){
    echo "El tipo de archivo no es permitido".$t;
    exit();
}

if(($_FILES['fichero']['size']/1024) > 2048){
    echo "El tamaño de archivo no es permitido".$t;
    exit();
}

if(mime_content_type($_FILES['fichero']['tmp_name']) != "image/jpeg" ){
    echo "El tipo de archivo no es permitido".$t;
    exit();
}


//Entre comillas debe ir la ruta de la carpeta
if(!file_exists("temp_archivos")){
    if(!mkdir("temp_archivos",0777)){
        echo "Error al crear el directorio".$t;
        exit();
    }
}

chmod("temp_archivos",0777);

if(move_uploaded_file($_FILES['fichero']['tmp_name'],"temp_archivos/".$_FILES['fichero']['name'])){
    echo "Archivo subido exitosamente".$t;
}else{
    echo "Error al subir el archivo".$t;
}
