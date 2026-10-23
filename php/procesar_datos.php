<?php
require_once __DIR__ . '/figuras.php';
require_once __DIR__ . '/../Objetos/FiguraGeometrica.php';
require_once __DIR__ . '/../Objetos/Cuadrado.php';
require_once __DIR__ . '/../Objetos/Rectangulo.php';
require_once __DIR__ . '/../Objetos/Triangulo.php';
require_once __DIR__ . '/../Objetos/Circulo.php';

$figura = $_SESSION['figura'] ?? '';
$datos  = $_SESSION['datos'] ?? [];

if (!array_key_exists($figura, $FIGURAS) || empty($datos)) {
    header('Location: ../index.php');
    exit;
}

//cada constructor tiene su propio orden de parámetros
if ($figura === 'Cuadrado') {
    $obj = new Cuadrado($datos['lado1'], $figura);
} elseif ($figura === 'Rectangulo') {
    $obj = new Rectangulo($datos['lado2'], $datos['lado1'], $figura);
} elseif ($figura === 'Triangulo') {
    $obj = new Triangulo($datos['lado2'], $datos['lado3'], $datos['lado1'], $figura);
} else {
    $obj = new Circulo($datos['lado1'], $figura);
}

$_SESSION['resultado'] = [
    'mensaje'   => (string) $obj,
    'area'      => $obj->CalcularArea(),
    'perimetro' => $obj->CalcularPerimetro(),
];

header('Location: ../resultado.php');
exit;