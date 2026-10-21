<?php
require_once __DIR__ . '/php/figuras.php';

$resultado = $_SESSION['resultado'] ?? null;
if ($resultado === null) {
    header('Location: index.php');
    exit;
}
?>
<p>Área: <?= e(round($resultado['area'], 2)) ?></p>
<p>Perímetro: <?= e(round($resultado['perimetro'], 2)) ?></p>