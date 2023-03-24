<?php
//Include ("Encapsulamiento.php");

require ("Encapsulamiento.php");

echo "Ejemplo <br>";

$ferrari = new carro();

echo $ferrari->llave."<br>";

$ferrari->encender();

$ferrari->nombrePropietario="Carlos Perez";

$ferrari->emitirMulta("$30.000");

$ferrari->mostrarMulta();

?>