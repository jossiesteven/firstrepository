<?php

echo "<h1>Importante PHP:</h1><br>";
echo "<h2>Variables (varian su valor) inician con el símbolo $</h2><br>";
echo "<h2>Finalizar sentencias de ejecución con el símbolo ;</h2><br>";
echo "Hola mundo PHP";

const miConstante = "Información";
echo "<br>";
echo miConstante;

$miVariable = 1000;
echo "<br>";
echo $miVariable;

$abc = true;

if ($abc){
    echo "<br>";
    echo "True=".$abc;
}
else {
    echo "<br>";
    echo $abc;
}

$abc = false;

if($abc==true){
    echo "<br>";
    echo $abc;
}
else{
    echo "<br>";
    echo "False=".$abc;
}

$abc = true;
if($abc == true){
    echo"<br>";
    echo "==".$abc;
}

$abc = false;
if($abc){
    echo "<br>";
    echo "True";
}

else if($abc == false){
    echo "<br>";
    echo "False = ".$abc;
}

for($i=0; $i<5; $i++){
    echo "<br>";
    echo "Número = ".$i;
}

$a=5;
while($a<10){
    echo "<br>";
    echo "Número = ".$a;
    $a++;
}

$b=10;

do{
    echo "<br>";
    echo "Número = ".$b;
    $b++;
}
while($b<15);

$cajero = "Opción 1"; 
switch ($cajero){
    case 'Opción 1':
        echo "<br>";
        echo($cajero);
        $cajero="Opción 2";
        break;
        case 'Opción 2':
            echo "<br>";
            echo($cajero);
            $cajero="Opción 3";
            break;  
    default:
        echo "<br>";
        console.log($cajero);
        break;
}

    function miFuncion(){
        echo "<br>";
        echo "Ejecutando miFuncion";        
    }

    function operacion(){
        $i=10;
        $a=10;
    
        $ia=$i+$a;
        echo "<br>";
        echo "Resultado = ".$ia;
    }

miFuncion();
operacion();

?>