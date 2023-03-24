<?php

//require ("electrodomestico.php");

class lavadoras extends electrodomesticos {

    public $nombre = "Lavadora";
    public $marca;
    public bool $secadora;
    private int $vidaUtil;

    public function lavar (){
        echo "Lavar ropa <br>";
    }

    public function secar (){
        echo "Secar ropa <br>";
    }
   
    
}







?>