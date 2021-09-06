<?php
/*
Aplicación No 18 (Auto - Garage)
Crear la clase Garage que posea como atributos privados:

_razonSocial (String)
_precioPorHora (Double)
_autos (Autos[], reutilizar la clase Auto del ejercicio anterior)

Realizar un constructor capaz de poder instanciar objetos pasándole como parámetros:

i. La razón social.
ii. La razón social, y el precio por hora.

Realizar un método de instancia llamado “MostrarGarage”, que no recibirá parámetros y
que mostrará todos los atributos del objeto.
Crear el método de instancia “Equals” que permita comparar al objeto de tipo Garaje con un
objeto de tipo Auto. Sólo devolverá TRUE si el auto está en el garaje.
Crear el método de instancia “Add” para que permita sumar un objeto “Auto” al “Garage”
(sólo si el auto no está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Add($autoUno);
Crear el método de instancia “Remove” para que permita quitar un objeto “Auto” del
“Garage” (sólo si el auto está en el garaje, de lo contrario informarlo).
Ejemplo: $miGarage->Remove($autoUno);

Maria Luana Jaimez
*/
require_once "../ej17/auto.php";

class Garage
{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos;

    public function __construct($_razonSocial, $_precioPorHora)
    {
        $this->_razonSocial = (string)$_razonSocial;
        $this->_precioPorHora = (double)$_precioPorHora;
        $this->_autos = array();
    }

    public function MostrarGarage()
    {
        echo "<br>Atributos:<br>";
        echo "Razon Social: " . $this->_razonSocial . "<br>"; echo "Precio: " . $this->_precioPorHora . "<br>";
        foreach ($this->_autos as $value) 
        {
            Auto::MostrarAuto($value);
        }
    }

    public function Equals($auto)
    {
        foreach ($this->_autos as $auxAuto) 
        {
            if ($auto == $auxAuto) 
            {
                return TRUE;
            }
        }
    }

    public function Add($agregar)
    {
        $retorno = $this->Equals($agregar);

        if ($retorno != TRUE) 
        {
            array_push($this->_autos,$agregar);
        }
        else 
        {
            echo "<br>No se pudo agregar el auto<br>";
        }
    }

    public function Remove($auto)
	{
		$retorno = false;

		if(($this->Equals($auto)))
		{
			$aux = array_search($auto, $this->_autos);
			unset($this->_autos[$aux]);
			$retorno=true;
		}
        else 
        {
            echo "<br>No se pudo remover el Auto<br>";
        }

		return $retorno;
	}
}

?>