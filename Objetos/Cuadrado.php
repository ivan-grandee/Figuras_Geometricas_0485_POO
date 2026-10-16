<?php
include "FiguraGeometrica.php";

class Cuadrado extends FiguraGeometrica{
    public $resA;
    public $resP;

    public function _costruct($l1, $tipo){
        $this->lado1 = $l1;
        $this->TipoFigura = $tipo;
    }

    public function __toString(){
        return "Este cuadrado tiene un área de " . $this->resA . " cm y un perímetro de " . $this->resP . ".";
    }

    function set_lado1($lado1){
        $this->lado1 = $lado1;
    }
    function set_tipo($tipo){
        $this->TipoFigura = $tipo;
    }
    function set_resA($resA){
        $this->resA = $resA;
    }
    function set_resP($resP){
        $this->resP = $resP;
    }

    
    function get_lado1(){
        return $this->lado1;
    }
    function get_tipo(){
        return $this->TipoFigura;
    }
    function get_resA(){
        return $this->resA;
    }
    function get_resP(){
        return $this->resP;
    }

    function CalcularArea(){
        $lado1 = $this->lado1;
        $resA = $this->resA;
        $resA = $lado1^2;
        return $resA;
    }

    function CalcularPerimetro(){
        $lado1 = $this->lado1;
        $resP = $this->resP;
        $resP = $lado1*4;
        return $resP;
    }

    function __desctruct(){
        
    }


}