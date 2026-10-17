<?php
include "FiguraGeometrica.php";

class Cuadrado extends FiguraGeometrica{

    public function _costruct($l1, $tipo){
        $this->lado1 = $l1;
        $this->TipoFigura = $tipo;
    }

    public function __toString(){
        return "Este cuadrado tiene un área de " . $this->CalcularArea() . " cm y un perímetro de " . $this->CalcularPerimetro() . ".";
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
        $resA = $lado1^2;
        return $resA;
    }

    function CalcularPerimetro(){
        $lado1 = $this->lado1;
        $resP = $lado1*4;
        return $resP;
    }

    function __desctruct(){
        
    }


}