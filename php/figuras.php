<?php
// Configuración común: sesión, lista de figuras y campos de cada una.

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// clave => nombre a mostrar
$FIGURAS = [
    'Cuadrado'   => 'Cuadrado',
    'Rectangulo' => 'Rectángulo',
    'Triangulo'  => 'Triángulo',
    'Circulo'    => 'Círculo',
];

// campos que se piden de cada figura: nombre del input => etiqueta
$CAMPOS = [
    'Cuadrado'   => ['lado1' => 'Lado'],
    'Rectangulo' => ['lado1' => 'Base', 'lado2' => 'Altura'],
    'Triangulo'  => ['lado1' => 'Lado 1', 'lado2' => 'Lado 2', 'lado3' => 'Lado 3'],
    'Circulo'    => ['lado1' => 'Radio'],
];

// Escapa texto para imprimirlo de forma segura en HTML
function e($texto)
{
    return htmlspecialchars((string) $texto, ENT_QUOTES, 'UTF-8');
}