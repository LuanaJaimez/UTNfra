<?php
/*
Aplicación No 9 (Arrays asociativos)
Realizar las líneas de código necesarias para generar un Array asociativo $lapicera, que
contadorenga como elementos: ‘color’, ‘marca’, ‘trazo’ y ‘precio’. Crear, cargar y mostrar tres
lapiceras.

Jaimez Maria Luana
*/
$color = array("Azul", "Negra", "Roja");
$marca = array("Bic", "Parker", "Faber Castell");
$trazo = array("Grueso", "Fino", "Mediano");
$precio = array(120, 80, 65);

$lapicera1 = array(
    "Color"=>$color[rand(0,2)], 
    "Marca"=>$marca[rand(0,2)], 
    "Trazo"=>$trazo[rand(0,2)], 
    "Precio"=>$precio[rand(0,2)]);

$lapicera2 = array(
    "Color"=>$color[rand(0,2)],
    "Marca"=>$marca[rand(0,2)],
    "Trazo"=>$trazo[rand(0,2)],
    "Precio"=>$precio[rand(0,2)]);

$lapicera3 = array(
    "Color"=>$color[rand(0,2)],
    "Marca"=>$marca[rand(0,2)],
    "Trazo"=>$trazo[rand(0,2)],
    "Precio"=>$precio[rand(0,2)]);

$contador = 1;

echo "Lapicera " . ($contador) . ":" . "<br>";
foreach($lapicera1 as $l => $datos)
{
    echo $l . ": " . $datos . " - ";
}
$contador++;
echo "<br>";

echo "Lapicera " . ($contador) . ":" . "<br>";
foreach($lapicera2 as $l => $datos)
{
    echo $l . ": " . $datos . " - ";
}
$contador++;
echo "<br>";

echo "Lapicera " . ($contador) . ":" . "<br>";
foreach($lapicera3 as $l => $datos)
{
    echo $l . ": " . $datos . " - ";
}
$contador++;

?>