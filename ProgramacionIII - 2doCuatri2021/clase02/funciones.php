<?php

function Saludar($nombre){
    echo "Bienvenido " . $nombre;
}

function MostrarUsuario($unUsuario){
    echo("El nombre del usuario es: ". $unUsuario->nombre);
}
?>