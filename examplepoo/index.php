<?php

echo "Test PHP <br>";

include ("computador.php");
include ("lavadora.php");

$miLaptop = new computadores();

echo "<h1>".$miLaptop->nombre."</h1><br>";

$miLaptop->mostrarSerial();
echo "<br>";
$miLaptop->encender();
echo "<br>";
$miLaptop->conectarWifi();
echo "<br>";
$miLaptop->ejecutarPrograma();
echo "<br>";
$miLaptop->almacenarInformacion();
echo "<br>";
$miLaptop->apagar();
echo "<br>";

$miLavadora = new lavadoras();

echo "<h1>".$miLavadora->nombre."</h1><br>";

$miLavadora->mostrarSerial();
echo "<br>";
$miLavadora->encender();
echo "<br>";
$miLavadora->lavar();
echo "<br>";
$miLavadora->secar();
echo "<br>";
$miLavadora->apagar();
echo "<br>";


?>