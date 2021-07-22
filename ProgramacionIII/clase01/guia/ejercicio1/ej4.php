<?php

$contador = 0;
$acumulador = 0;

do
{
    $contador++;
    echo("numero: " . $contador . "<br>");
    $acumulador += $contador;
}while(($acumulador + $contador) < 1000);

echo("total numero agregados: " . $contador . "<br>");
echo("resultado: " . $acumulador);


?>