<?php
echo "Hi!!!";

abstract class animal{

    abstract public function hablar();
        
    }

    class perro extends animal{
        public function hablar(){
            echo "Ladra....";
        }    
    }

    class gato extends animal{
        public function hablar(){
            echo "Maullar...";
        }
    }

    function hacerHablar(animal $animal){
        $animal->hablar();
    }

    $miPerro = new perro();
    $miGato = new gato();

    hacerHablar();
?>