<?php

    $accion = isset($_POST["accion"]) ? $_POST["accion"] : 0;
    
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : 0;
    
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : 0;
    
    $legajo = isset($_POST["legajo"]) ? $_POST["legajo"] : 0;

    $archivo = fopen("./archivos/alumnos.txt", "a");
    
    fwrite($archivo, "Legajo: $legajo - Apeliido: $apellido - Nombre: $nombre \r\n");

    fclose($archivo);

?>