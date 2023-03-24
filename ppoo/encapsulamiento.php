<?php

class carro {

    public $llave = "Llave seguridad <br>";
    public $nombrePropietario;
    private $multas;
    protected $aceite;

    public function encender(){

        echo "Encendiendo carro!!!<br>";

        $this->emitirGases();
    }

    public function acelerar(){

        echo "Acelerando carro a 80km/h <br>";
    }

    private function emitirGases(){

        echo "Emitir gases CO2 <br>";
    }

    public function emitirMulta($valorMulta, $tipoAceite="Primax"){

        $this->multas = $valorMulta;
        $this->aceite = $tipoAceite;
    }

    public function mostrarMulta(){

        echo "Nombre propietario: ". $this->nombrePropietario."<br>";
        echo "Valor multa: " .$this->multas. "<br>";
    }
}

$ferrari = new carro();

echo $ferrari->llave."<br>";

$ferrari->encender();

$ferrari->nombrePropietario="Carlos Perez";

$ferrari->emitirMulta("$30.000");

$ferrari->mostrarMulta();

?>