<?php
/*
Aplicación No 6 (Carga aleatoria)
Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
función rand). Mediante una estructura condicional, determinar si el promedio de los números
son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
resultado.

Jaimez Maria Luana
*/
$enteros = array();
$sumar = 0;
$contador = 0;
$promedio = 0;

for($i = 0; $i < 5; $i++)
{
    $aux = rand(1,10);
    $enteros[$i] = $aux;
    $sumar = $sumar + $aux;
    $contador++;
}

var_dump($enteros); //Para ver cuales son los elementos del array
$promedio = $sumar / $contador;

if($promedio > 6)
{
    echo '<br>El promedio es mayor a 6';
}
else if($promedio < 6)
{
    echo '<br>El promedio es menor a 6';
}
else
{
    echo '<br>El promedio es igual a 6';
}
?>