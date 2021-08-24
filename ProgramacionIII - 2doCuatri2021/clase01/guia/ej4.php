<?php
/*
Aplicación No 4 (Calculadora)
Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.

Jaimez Maria Luana
*/
$op1 = 10;
$op2 = 2;
$resultado = 0;
$operador = "/";


switch($operador)
{
    case '+':
        $resultado = $op1 + $op2;
        echo 'El resultado de la Suma es: ' . $resultado;
    break;

    case '-':
        $resultado = $op1 - $op2;
        echo 'El resultado de la Resta es: ' . $resultado;
    break;

    case '*':
        $resultado = $op1 * $op2;
        echo 'El resultado de la Multiplicacion es: ' . $resultado;
    break;

    case '/':
        if($op2 == 0)
        {
            echo 'No se puede dividir por 0';
        }
        else
        {
            $resultado = $op1 / $op2;
            echo 'El resultado de la Division es: '. $resultado;
        }
    break;
    default: 
        echo "No hay operador seleccionado";
}

?>