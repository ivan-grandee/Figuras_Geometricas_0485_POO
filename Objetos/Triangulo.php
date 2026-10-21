<?php

require_once __DIR__ . '/FiguraGeometrica.php';
//  Si no al calbiar de figura da error porque se guarda la anterior
class Triangulo extends FiguraGeometrica{
    public $lado2;
    public $lado3;
   

    public function __construct($l1, $l2, $l3, $tipo){
    $this->lado1 = $l1;
    $this->lado2 = $l2;
    $this->lado3 = $l3;
    $this->TipoFigura = $tipo;
    }

    public function __toString(){
        return "Este triangulo tiene un área de " . $this->CalcularArea() . " y un perímetro de " . $this->CalcularPerimetro() . ".";
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