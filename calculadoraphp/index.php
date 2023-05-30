<?php

function suma($valorA,$valorB){
    return $valorA+$valorB;
}

function resta($valorA,$valorB){
    return $valorA-$valorB;
}

function multiplicacion($valorA,$valorB){
    return $valorA*$valorB;
}

function division($valorA,$valorB){
    return $valorA/$valorB;
}

function sumatoria($limite){
    
    $valorSumatoria=0;
    $i=1;
    while($i<=$limite){
        #code
        $valorSumatoria=$valorSumatoria+pow($i,2);
        $i++;
    }
    return $valorSumatoria;
}

function mostrarResultado($operacion,$resultado){
    echo "Resultado ".$operacion." = ".$resultado;
    return true;
}

function calculadora($operacion=null,$parametros=[]){
    switch($operacion){
        case 'suma':
            mostrarResultado($operacion,suma($parametros[0],$parametros[1]));
            break;
        case 'resta':
            mostrarResultado($operacion,resta($parametros[0],$parametros[1]));
            break;
        case 'multiplicacion':
            mostrarResultado($operacion,multiplicacion($parametros[0],$parametros[1]));
            break;        
        case 'division':
            mostrarResultado($operacion,division($parametros[0],$parametros[1]));
            break;
        case 'sumatoria':
            mostrarResultado($operacion,sumatoria($parametros[0]));        
        default:
            echo "No selecciono operación";
        break;
    }
}

calculadora("suma",[10,40]);


?>