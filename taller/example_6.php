<?php

function calcularAreaTr($base, $altura){

    $area=($base*$altura)/2;
    return $area;

}

$areaTriangulo=calcularAreaTr(2,2);
echo "El área del triágunlo es: $areaTriangulo metros";

/*
function calcularAreaDelta($base,$altura){
    
    echo "La base es: $base<br>";
    echo "La altura es: $altura<br>";
    $resultado=($base*$altura)/2;
    echo "El área del triángulo es = $resultado<br><br>";
    
    return true;
}

calcularAreaDelta(5,4);
calcularAreaDelta(8,5);
calcularAreaDelta(3,2);
*/

?>