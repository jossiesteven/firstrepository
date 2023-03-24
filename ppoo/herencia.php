<?php

class animal{

    public $tamanio="20 cm";

    public function correr(){

        echo "Velocidad promedio de un animal 10 km/h <br>";
    }
}

class perro extends animal{

    public function vigilar (){

        echo "Vigilar hogar <br>";

    }

}

class gato extends animal{

    public function dormir(){

        echo "Dormir todo el día <br>";
    }
}

$miPerro = new perro();
$miGato = new gato();

$miPerro->vigilar();

$miGato->dormir();

$miPerro->correr();

$miGato->correr();

echo $miPerro->tamanio;


?>