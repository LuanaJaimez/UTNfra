<?php
/*
Aplicación No 17 (Auto)
● Crear dos objetos “Auto” de la misma marca y distinto color.
● Crear dos objetos “Auto” de la misma marca, mismo color y distinto precio.
● Crear un objeto “Auto” utilizando la sobrecarga restante.
● Utilizar el método “AgregarImpuesto” en los últimos tres objetos, agregando $1500 al atributo precio.
● Obtener el importe sumado del primer objeto “Auto” más el segundo y mostrar el resultado obtenido.
● Comparar el primer “Auto” con el segundo y quinto objeto e informar si son iguales o no.
● Utilizar el método de clase “MostrarAuto” para mostrar cada los objetos impares (1, 3, 5)

Maria Luana Jaimez
*/
require_once("auto.php");

$auto1 = new Auto("Rojo", 1500000, "Fiat", "05/11/2019");
$auto2 = new Auto("Gris", 1000000, "Fiat", "04/06/2019");
$auto3 = new Auto("Blanco", 350000, "Renault", "09/04/1994");
$auto4 = new Auto("Blanco", 670000, "Renault", "02/05/2009");
$auto5 = new Auto("Negro", 200000, "Volkswagen", "07/01/1998");

//Agregar impuestos
$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

//Suma de importes
echo "Importe del primer auto y el segundo = " . Auto::Add($auto1, $auto2) . "<br><br>";

//Comparacion1
echo "Comparacion del Auto1 con el Auto2: ";
if(Auto::Equals($auto1, $auto2))
{
    echo "Los autos son de la misma marca.<br>";
}
else
{
    echo "Los autos no son de la misma marca.<br>";
}

echo "<br>";

//Comparacion2
echo "Importe del primer auto y el quinto = " . Auto::Add($auto1, $auto5) . "<br><br>";

echo "Comparacion del Auto1 con el Auto5: ";
if(Auto::Equals($auto1, $auto5))
{
    echo "Los autos son de la misma marca.<br>";
}
else
{
    echo "Los autos no son de la misma marca.<br>";
}

//Mostrar atributos de los autos impares (1, 3, 5)
Auto::MostrarAuto($auto1);
Auto::MostrarAuto($auto3);
Auto::MostrarAuto($auto5);

?>