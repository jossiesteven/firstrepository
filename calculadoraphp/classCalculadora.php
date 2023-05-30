<?php

class Calculadora{
    private $operacion="Sin operación";
    private $parametros=[];
    private $resultado="Sin resultado";

    private function suma(){
        $this->resultado=$this->parametros[0]+$this->parametros[1];
        return true;
    }
    
    private function resta(){
        $this->resultado=$this->parametros[0]-$this->parametros[1];
        return true;
    }
    
    private function multiplicacion(){
        $this->resultado=$this->parametros[0]*$this->parametros[1];
        return true;
    }
    
    private function division(){
        $this->resultado=$this->parametros[0]/$this->parametros[1];
        return true;
    }

    private function sumatoria(){
        $limite=$this->parametros[0];
        $valorSumatoria=0;
        $i=1;
        while($i<=$limite){
            #code
            $valorSumatoria=$valorSumatoria+pow($i,2);
            $i++;
        }
        $this->resultado=$valorSumatoria;
        return true;
    }

    public function mostrarResultado(){
        echo "Resultado ".$this->operacion." = ".$this->resultado;
        return true;
    }

    public function ejecutar($operacionPr,$parametrosPr){
        $this->operacion=$operacionPr;
        $this->parametros=$parametrosPr;

        
        switch($this->operacion){
            case 'suma':
                $this->suma();
                break;
            case 'resta':
                $this->resta();
                break;
            case 'multiplicacion':
                $this->multiplicacion();
                break;        
            case 'division':
                $this->division();
                break;
            case 'sumatoria':
                $this->sumatoria();        
            default:
                echo "No selecciono operación";
            break;
        }
    }
    
}

$miCalculadora=new Calculadora();
//Recuerde habilitar línea 76(quitar doble slash)
//$miCalculadora->ejecutar("resta",[15,16]);
$miCalculadora->mostrarResultado();


    



?>