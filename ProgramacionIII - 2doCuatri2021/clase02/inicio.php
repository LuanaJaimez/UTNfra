<?php
    include "usuario.php";
    include "funciones.php";

    $usuario = new Usuario();
    $usuario->nombre = "Maria";
    
    MostrarUsuario($usuario);

?>