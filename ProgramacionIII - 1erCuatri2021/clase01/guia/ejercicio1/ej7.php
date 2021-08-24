<?php

$fecha = date("d/m/Y-h:i:s");
echo "la fecha actual es: " . $fecha . "<br/>";

$mes = date("m");
echo "el mes actual es: " . $mes . "<br/>";

switch($mes)
{
    case "12":
    case "01":
    case "02":
        echo "la estacion actual es Verano.";
        break;
    case "03":
    case "04":
    case "05":
        echo "la estacion actual es Otoño.";
        break;
    case "06":
    case "07":
    case "08":
        echo "la estacion actual es Invierno.";
    case "09":
    case "10":
    case "11":
        echo "la estacion actual es Primavera";
        break;
    default:
    echo "mes no valido";
    break;
}

?>