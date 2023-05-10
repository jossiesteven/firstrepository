<?php

class libro {
    public int $valorLibro;
    public string $tamanio;
    public string $nombre;
    private string $isbn;
    

    function __construct ($tamanio, $precioLibro=0, $nombre){

        $this->tamanio=$tamanio;
        $this->valorLibro=$precioLibro;
        $this->isbn="sadwxx11";
        $this->nombre=$nombre;

        // $this->$tamanio=$tamanio;
        // $forma;
        // $textura;
        // $idioma;
        // $color;
        // $isbn
    }

    function Mostrar(){

    }
    function Informar(){

        echo "<br>Ejecutando Acción o Método Informar de la clase libro";
        $this->MostrarIsbn();
        echo "<br>".$this->isbn;

    }

    function Compartir(){

    }

    private function mostrarIsbn (){

        echo"<br>Ejecutando acción o método MostrarIsbn de la clase libro";

    }

}

$libroParticular = new libro("15 cm",12000,"Cien años de Soledad");

echo $libroParticular->tamanio;
echo "<br>";
echo $libroParticular->valorLibro;
echo "<br>";
echo $libroParticular->nombre;

//$libroParticular->mostrarIsbn(); no se usa

//$libroParticular->Informar();

$libroParticular->Informar();

echo "<br>"; echo "<br>"; echo "<br>";

$libroFrances = new libro("5 cm",40000,"Diccionario");

echo $libroFrances->tamanio;
echo "<br>";
echo $libroFrances->valorLibro;
echo "<br>";
echo $libroFrances->nombre;

$libroFrances->Informar();

?>