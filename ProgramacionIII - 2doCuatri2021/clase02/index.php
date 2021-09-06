<?php

require "funciones.php";
require "usuario.php";

//Saludar("Luana");

$unUsuario = new Usuario();
$unUsuario->nombre="Luana";

Saludar($unUsuario->nombre);

?>