<?php
$numero=array(9,8,7,6,5,4,3,2,1,0);

for($i=0;$i<=9;$i++){
    echo "Los numeros del arreglo son $numero[$i] <br>";
}
echo "<br>";


$numeros=array(1,2,3,4,5,6,7,8,9,10);

$limite=count($numeros)-1;
//limite es relacionado con la cantidad de valores
echo "Cantidad elementos $limite <br>";
$j=0;
while($j<=$limite){
    echo "Numero = $numeros[$j] <br>";
    //Por posiciones
    $j++;
}
?>

