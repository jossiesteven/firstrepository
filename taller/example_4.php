<?php
$datosPersonales=array(
    "Steven"=>31,
    "Marcos"=>2,
    "Juan"=>41,
    "Carlos"=>21,
    "Edwin"=>11,
    "Lian"=>1
);

foreach($datosPersonales as $nombre =>$edad){

    echo "<b>Nombre:</b> $nombre - <b>Edad</b> $edad años <br>";
    /*echo "$nombre <br>";
    echo "$edad <br>";*/
}

?>