<?php

include "FiguraGeometrica.php";

class Triangulo extends FiguraGeometrica{
    public $lado2;
    public $lado3;
   

    public function __construct($l2, $l3, $l1, $tipo){
        $this->lado2 = $l2;
        $this->lado3 = $l3;
        $this->lado1 = $l1;
        $this->TipoFigura = $tipo;
    }

    public function __toString(){
        return "Este triangulo tiene un área de " . $this->CalcularArea() . " cm y un perímetro de " . $this->CalcularPerimetro() . ".";
    }

    function set_lado1($lado1){
        $this->lado1 = $lado1;
    }
    function set_lado2($lado2){
        $this->lado2 = $lado2;
    }
    function set_lado3($lado3){
        $this->lado3 = $lado3;
    }
    function set_tipo($TipoFigura){
        $this->TipoFigura = $TipoFigura;
    }
    


    function get_lado1(){
        return $this->lado1;
    }
    function get_lado2(){
        return $this->lado2;
    }
    function get_lado3(){
        return $this->lado3;
    }
    function get_tipo(){
        return $this->TipoFigura;
    }
    

    function CalcularArea(){
        $l1 = $this->lado1;
        $l2 = $this->lado2;
        $l3 = $this->lado3;
        $s = ($l1+$l2+$l3)/2;
        $resA = sqrt($s*($s-$l1)*($s-$l2)*($s-$l3));
        return $resA;
    }

    function CalcularPerimetro(){
        $l1 = $this->lado1;
        $l2 = $this->lado2;
        $l3 = $this->lado3;
        $resP = $l1+$l2+$l3;
        return $resP;
    }

    function __destruct(){
        
    }
}