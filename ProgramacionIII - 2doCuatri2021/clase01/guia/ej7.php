<?php
/*
Aplicación No 7 (Mostrar impares)
Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números utilizando las estructuras while y foreach.

Jaimez Maria Luana
*/
$numeros = array();
$contador = 0;
$contador2 = 0;

while($contador < 10)
{
    $aux = rand(1, 10);
    if($aux % 2 != 0)
    {
        $numeros[$contador] = $aux;
        $contador++;
    }
}

echo "Impresion con For:";
for($i = 0; $i < 10; $i++)
{
    echo "<br>" . $numeros[$i];
}

echo "<br><br>Impresion con While:";
while($contador2 < 10)
{
    echo "<br>" . $numeros[$contador2];
    $contador2++;
}

echo "<br><br>Impresion con Foreach:";
foreach($numeros as $num)
{
    echo "<br>" . $num;

}

?>