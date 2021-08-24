<?php
/*
Aplicación No 10 (Arrays de Arrays)
Realizar las líneas de código necesarias para generar un Array asociativo y otro indexado que
contengan como elementos tres Arrays del punto anterior cada uno. Crear, cargar y mostrar los
Arrays de Arrays.

Jaimez Maria Luana
*/
$color = array("Azul", "Negra", "Roja");
$marca = array("Bic", "Parker", "Faber Castell");
$trazo = array("Grueso", "Fino", "Mediano");
$precio = array(120, 80, 65);

$lapiceras = array(
    array(
        "Color"=>$color[rand(0,2)],
        "Marca"=>$marca[rand(0,2)],
        "Trazo"=>$trazo[rand(0,2)],
        "Precio"=>$precio[rand(0,2)]),
    array(
        "Color"=>$color[rand(0,2)],
        "Marca"=>$marca[rand(0,2)],
        "Trazo"=>$trazo[rand(0,2)],
        "Precio"=>$precio[rand(0,2)]),
    array(
        "Color"=>$color[rand(0,2)],
        "Marca"=>$marca[rand(0,2)],
        "Trazo"=>$trazo[rand(0,2)],
        "Precio"=>$precio[rand(0,2)]));

$contador = 1;

foreach($lapiceras as $lapicera)
{
    echo "Lapicera " . ($contador) . ":" . "<br>";

    foreach($lapicera as $l => $datos)
    {
        echo $l . ": " . $datos . " - ";
    }

    $contador++;
    echo "<br>";
}

?>