<?php

function esPar ($numero){
    if ($numero%2==0){

        echo "El número $numero es par <br>";
    }
    else{
        echo "El numero $numero es impar <br>";
    }
}

echo true;
echo "<br>";

echo false;
echo "<br>";

esPar(15);
esPar(16);
esPar(20);
esPar(25);
?>