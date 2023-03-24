<?php

require ("electrodomestico.php");

class computadores extends electrodomesticos {

    
    public $nombre = "Computador";
    public $marca;
    public $ram;
    public int $cpu;
    private $macAdress;



    public function conectarWifi (){
        echo "Conectando Wifi <br>";
    }

    public function ejecutarPrograma (){
        echo "Ejecutando programa <br>";
    }

    public function almacenarInformacion (){
        echo "Almacenando información <br>";
    }
   
    
}







?>