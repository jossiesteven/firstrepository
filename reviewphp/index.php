<?php

echo "<br><b>Hola</b><br>mundo!";

const myConst="data";

$myVar=100000;
$name='Alfonso';
$email="alfonso@hotmail.com";

echo $myVar."<br>";

$myVar="Steven";

echo $myVar;

$mydata=$myVar.myConst;

echo $mydata;

echo "<br>";

if(true){
    echo "Ingreso condicional if";
}

else{
    echo "Ingreso condicional else";
}

for($i=0;$i<10;$i++){
    echo "Cadena for <br>";
}

$a=0;
while($a<=10){
    #code
    echo "Cadena while <br>";
    $a++;
}
$a=5;
do{
    #code...
    echo "Cadena do while <br>";
    $a++;
    } while($a<=10);

    $variable="opcion_1";

    switch($variable){
        case 'opcion_1':
            echo "ejecución opción 1 <br>";
            break;
        case 'opcion_2':
            echo "ejecución opción 2 <br>";
            break;
        default:
            echo "ejecución default <br>";
            break;
    }

    // imprime posición 0 1 2 3 4
    $variable=[1,3,4,"miercoles","viernes"];

    //foreach($variable as $key =>$value)


    foreach($variable as $value){
        //echo "posición en el arreglo =>".$key."=>".$value;
        echo $value;
        echo "<br>";
    }

    function suma ($valorA=0,$valorB=0){
        $result=$valorA+$valorB;
        return "Resultado = ".$result."<br>";        
    }

    $sum=suma(1,3);
    echo $sum;

    //Método o función
    function saludar (){
        echo "Saludo Full Stack!";
        return true;       
    }
    saludar();

    echo "<br>";

    

    class persona{
        public $name;
        private $age=50;

        public function setName($nameData){
            $this->name=$nameData;
        }

        public function setAge($ageData){
            $this->age=$ageData;
        }

        public function viewInformation(){
            return "Nombre: ".$this->name." Edad:".$this->age;
        }

        /*public function obtenerNombre(){
            return "Juan";
        }
        public function obteneredad(){
            return 25;
        }*/ 

    }

    $person=new persona();
    $person->setName("María");
    $person->setAge(25);

    echo $person->viewInformation();


        /*echo "<br>";
        echo $person->obtenerEdad();
        echo "<br>";
        echo $person->obtenerNombre();*/

?>