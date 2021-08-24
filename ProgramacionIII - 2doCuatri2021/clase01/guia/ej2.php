<?php
/*
Aplicación No 2 (Mostrar fecha y estación)
Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.

Jaimez Maria Luana
*/
$hoy = new DateTime();
$verano = new DateTime("December 21");
$otoño = new DateTime("March 21");
$invierno = new DateTime("June 21");
$primavera = new DateTime("September 21");

echo "La fecha actual es: " . $hoy->format('d-m-Y') . "<br>" ;

$mes = date("m");
echo "El mes actual es: " . $mes . "<br/>";

switch($mes)
{
    case "12":
    case "01":
    case "02":
        echo "La estacion actual es Verano.";
        break;
    case "03":
    case "04":
    case "05":
        echo "La estacion actual es Otoño.";
        break;
    case "06":
    case "07":
    case "08":
        echo "La estacion actual es Invierno.";
        break;
    case "09":
    case "10":
    case "11":
        echo "La estacion actual es Primavera.";
        break;
    default:
    echo "Mes no valido";
    break;
}

?>