<?php
/*
Aplicación No 18 (Auto - Garage)
En testGarage.php, crear autos y un garage. Probar el buen funcionamiento de todos los
métodos.

Maria Luana Jaimez
*/
include_once "../ej17/auto.php";
include_once "garage.php";

$autoUno = new Auto("Rojo", 1500000, "Fiat", "05/11/2019");
$autoDos = new Auto("Rojo", 1000000, "Negro", "04/06/2019");

$autoTres = new Auto("Blanco", 350000, "Renault", "09/04/1994");
$autoCuatro = new Auto("Blanco", 670000, "Renault", "02/05/2009");

$autoCinco = new Auto("Azul", 200000, "Volkswagen", "07/01/1998");

$miGarage = new Garage("Enactia S.R.L.", 10);

$miGarage->add($autoUno);
$miGarage->add($autoDos);
$miGarage->add($autoTres);
$miGarage->add($autoCuatro);
$miGarage->add($autoCinco);

$miGarage->MostrarGarage();

$miGarage->add($autoUno);
$miGarage->remove($autoCinco);
 
$miGarage->MostrarGarage();
?>