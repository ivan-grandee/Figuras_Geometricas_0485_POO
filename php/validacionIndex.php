<?php
// Recibe la figura elegida en index.php, la valida y la guarda en sesión.
require  'figuras.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: ../index.php');
    exit;
}

$figura = $_POST['figura'] ?? '';

if (!isset($FIGURAS[$figura])) {
    $_SESSION['errorIndex'] = 'Debes seleccionar una figura para continuar.';
    header('Location: ../index.php');
    exit;
}

// Si cambia de figura, los datos anteriores ya no sirven
if (($_SESSION['figura'] ?? null) !== $figura) {
    unset($_SESSION['datos'], $_SESSION['errores']);
}

$_SESSION['figura'] = $figura;
unset($_SESSION['errorIndex']);

header('Location: ../datos_figura.php');
exit;