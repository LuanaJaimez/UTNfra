<?php
/*
Aplicación No 12 (Invertir palabra)
Realizar el desarrollo de una función que reciba un Array de caracteres y que invierta el orden
de las letras del Array.
Ejemplo: Se recibe la palabra “HOLA” y luego queda “ALOH”.

Maria Luana Jaimez
*/
function InvertirPalabra($palabra)
{
    $palabraInvertida = array_reverse($palabra);

    echo "Se recibe la palabra ";
    print_r($palabra);
    echo " y luego queda ";
    print_r($palabraInvertida);
}

?>