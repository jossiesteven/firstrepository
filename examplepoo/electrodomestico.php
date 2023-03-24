<?php

class electrodomesticos {
    private $serial;
    public $tipo;
    public $almacenamientoEnergia;
    public bool $internet;

    public function encender (){
        echo "Encender electrodoméstico <br>";
    }

    public function apagar (){
        echo "Apagar electrodoméstico <br>";
    }  
    
    function __construct()
    {
        //$this->serial = $randstring;
        $this->serial = $this->generateRandomString();

        //echo "Mi serial es: ".$this->serial;
    }

    public function mostrarSerial(){
        echo "Mi serial es: ".$this->serial;
        echo "<br>";
    }    

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }
        //echo $randomString;
        return $randomString;
    }

}







?>