<?php
/*
Aplicación No 5 (Números en letras)
Realizar un programa que en base al valor numérico de una variable $num, pueda mostrarse
por pantalla, el nombre del número que tenga dentro escrito con palabras, para los números
entre el 20 y el 60.
Por ejemplo, si $num = 43 debe mostrarse por pantalla “cuarenta y tres”.

Jaimez Maria Luana
*/
$num = 28;
$numeroLetra;

if($num >= 20 && $num <= 60)
{
    if($num < 30)
    {
        if($num == 20)
        {
            $numeroLetra = "Veinte.";
        }
        else
        {
            $numeroLetra =  "Veinti";
        }
    }
    elseif($num < 40)
    {
        if($num == 30)
        {
            $numeroLetra = "Treinta.";
        }
        else
        {
            $numeroLetra = "Treinta y ";
        }
    }
    elseif($num < 50)
    {
        if($num == 40)
        {
            $numeroLetra =  "Cuarenta.";
        }
        else
        {
            $numeroLetra =  "Cuarenta y ";
        }
    }
    elseif($num < 60)
    {
        if($num == 50)
        {
            $numeroLetra =  "Cincuenta.";
        }
        else
        {
            $numeroLetra = "Cincuenta y ";
        }
    }
    elseif($num == 60)
    {
        $numeroLetra = "Sesenta.";
    }

    $num = substr($num, 1, 1); //Para que tome el 2do numero
    switch($num)
    {
        case '1':
            //$numeroLetra = $numeroLetra . "uno.";
            $numeroLetra .= "uno.";
            break;
        case '2':
            $numeroLetra .= "dos.";
            break;
        case '3':
            $numeroLetra .= "tres.";
            break;
        case '4':
            $numeroLetra .= "cuatro.";
            break;
        case '5':
            $numeroLetra .= "cinco.";
            break;
        case '6':
            $numeroLetra .= "seis.";
            break;
        case '7':
            $numeroLetra .= "siete.";
            break;
        case '8':
            $numeroLetra .= "ocho.";
            break;
        case '9':
            $numeroLetra .= "nueve.";
            break;
    }

    echo 'El numero ingresado es: ' . $numeroLetra;

}
else
{
    echo "El numero ingresado no esta entre 20 y 60";
}

?>