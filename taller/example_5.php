<?php

class Persona{
    /*
    public $nombre;
    public $edad;
    public $profesion;
    */
    private $nombre;
    private $edad;
    private $profesion;

    public function setPerson($nombreData,$edadData,$profesionData){
        $this->nombre=$nombreData;
        $this->edad=$edadData;
        $this->profesion=$profesionData;

        return true;
    }
    public function viewInformation(){
        # code...
        echo "Nombre: $this->nombre<br>";
        echo "Edad: $this->edad<br>";
        echo "Profesión: $this->profesion<br>";
        return true;
    }
}

$user=new Persona();
$user->setPerson("Steven", 31, "Tecnólogo");
$user->viewInformation();

/* Forma sencilla
class Persona{

    public $nombre;
    public $edad;
    public $profesion;

}

$user=new Persona();

$user->nombre="Steven";
$user->edad=31;
$user->profesion="Tecnólogo";

echo "Nombre: $user->nombre<br>";
echo "Edad: $user->edad<br>";
echo "Profesión: $user->profesion<br>";*/


?>