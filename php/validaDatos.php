<?php
require_once __DIR__ . '/figuras.php';

// Si no hay figura válida en sesión, volvemos al index
$figura = $_SESSION['figura'] ?? '';
if (!array_key_exists($figura, $FIGURAS)) {
    header('Location: ../index.php');
    exit;
}

$valores = [];
$errores = [];

// Validamos solo los campos que corresponden a la figura elegida
foreach ($CAMPOS[$figura] as $name => $etiqueta) {
    $valor = trim($_POST[$name] ?? '');

    if ($valor === '') {
        $errores[] = "El campo $etiqueta es obligatorio";
    } elseif (!is_numeric($valor) || $valor <= 0) {
        $errores[] = "$etiqueta debe ser un número mayor que 0";
    } else {
        $valores[$name] = (int) $valor;
    }
}

// Validación extra del triángulo: cada lado menor que la suma de los otros dos
if (empty($errores) && $figura === 'Triangulo') {
    $a = $valores['lado1'];
    $b = $valores['lado2'];
    $c = $valores['lado3'];

    if ($a >= $b + $c || $b >= $a + $c || $c >= $a + $b) {
        $errores[] = 'Los lados no forman un triángulo válido';
    }
}

// Si hay errores, volvemos al formulario con el mensaje
if (!empty($errores)) {
    $_SESSION['errorDatos'] = implode('. ', $errores);
    header('Location: ../datos_figura.php');
    exit;
}

// Todo correcto: guardamos los datos y pasamos a la siguiente página
$_SESSION['datos'] = $valores;
header('Location: procesar_datos.php');
exit;