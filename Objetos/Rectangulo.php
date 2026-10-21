<?php
require_once __DIR__ . '/FiguraGeometrica.php';

class Rectangulo extends FiguraGeometrica{
    public $lado2;
    

    public function __construct($l1, $l2, $tipo){
    $this->lado1 = $l1;
    $this->lado2 = $l2;
    $this->TipoFigura = $tipo;
    }

    public function __toString(){
        return "Este rectangulo tiene un área de " . $this->CalcularArea() . " y un perímetro de " . $this->CalcularPerimetro() . ".";
    }

    function set_lado2($lado2){
        $this->lado2 = $lado2;
    }
    function set_lado1($lado1){
        $this->lado1 = $lado1;
    }
    function set_tipo($tipo){
        $this->TipoFigura = $tipo;
    }
    

    function get_lado2(){
        return $this->lado2;
    }
    function get_lado1(){
        return $this->lado1;
    }
    function get_tipo(){
        return $this->TipoFigura;
    }
    

    function CalcularArea(){
        $lado1 = $this->lado1;
        $lado2 = $this->lado2;
        $resA = $lado1*$lado2;
        return $resA;
    }

    function CalcularPerimetro(){
        $lado1 = $this->lado1;
        $lado2 = $this->lado2;
        $resP = ($lado1*2)+($lado2*2);
        return $resP;
    }

    function __destruct(){

    }


}