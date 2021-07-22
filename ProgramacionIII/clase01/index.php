<?php
echo "hola mundo";

echo "<br>";

echo "http://localhost/clasesProg3/clase01/";

//phpinfo();

//tira info de la config de mi php

//comentario de una sola linea

#otro comentario de una linea

/*comentario con mas
de una linea*/

$nombre = "Juan";

echo "<br>" . $nombre;

$nombre = "ahora soy roberto";

echo "<br>" . $nombre;

echo "<br>";
echo "<br>";

//---------------------------------------------------
#Arrays

$vec = array(1, 2, "3", 4);
//Puede tener distintos tipos de elementos
var_dump($vec);

echo "<br>";

#Recorrer arrays
for($i=0; $i < count($vec); $i++)
{
    echo $vec[$i] . "<br>"; 
    //Aca se puede usar echo porque se esta accediendo a un elemento del array
}

echo "<br>";

foreach($vec as $item)
{
    echo $item . "<br>";
}

echo "<br>";

#Array asociativo
//Se accede por una cadena en vez de por un valor numerico
$vecAsoc = array("uno" => 1, "dos" => 2);
$vecAsoc["tres"] = 3;

foreach($vecAsoc as $item)
{
    echo $item . "<br>";
}

echo $vecAsoc["dos"];

echo "<br>";

//Permite agregar un elemento nuevo al array, en vez de hacerlo con corchetes
array_push($vec, 88);

foreach($vec as $item)
{
    echo $item . "<br>";
}

?>

