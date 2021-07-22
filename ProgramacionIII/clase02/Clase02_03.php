<?php 
	//En caso de falla devuelve un fatal error
	//pega el contenido del archivo a partir de esa linea
	require "funciones.php";
	//trae el contenido de manera relativa pero tambien chequea que no lo haya requerido desde otro lado
	#require_once "funciones.php";

	//en caso de falla devuelve un warning
	include "otroArchivo.php";

	Saludar();
	echo "<br/>";

	Saludar2("Juan");
	echo "<br/>";

	echo Saludar3("Rosa", "Femenino");
	echo "<br/>";

	echo Saludar3("Carlos");
	echo "<br/>";