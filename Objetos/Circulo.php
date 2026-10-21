<?php
require_once __DIR__ . '/FiguraGeometrica.php';
class Circulo extends FiguraGeometrica{
    

    public function __construct($lado1, $tipo){
        $this->lado1 = $lado1;
        $this->TipoFigura = $tipo;
    }

    public function __toString(){
        return "Este círculo tiene un área de " . $this->CalcularArea() . " y un perímetro de " . $this->CalcularPerimetro() . ".";
    }

    function set_lado1($lado1){
        $this->lado1 = $lado1;
    }
    function set_tipo($tipo){
        $this->TipoFigura = $tipo;
    }
    

    
    function get_lado1(){
        return $this->lado1;
    }
    function get_tipo(){
        return $this->TipoFigura;
    }
    

    function CalcularArea(){
        $lado1 = $this->lado1;
        $resA = M_PI*$lado1**2;
        return $resA;
    }

    function CalcularPerimetro(){
        $lado1 = $this->lado1;
        $resP = 2*M_PI*$lado1;
        return $resP;
    }

    function __destruct(){
        
    }


}