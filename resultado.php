<?php
require_once __DIR__ . '/php/figuras.php';


$figura = $_SESSION['figura'] ?? '';
if (!array_key_exists($figura, $FIGURAS)) {
    header('Location: index.php');
    exit;
}

$resultado = $_SESSION['resultado'] ?? null;
if ($resultado === null) {
    header('Location: index.php');
    exit;
}
?>
   <!DOCTYPE html>
   <html lang="es">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Resultado</title>
       <link rel="stylesheet" href="css/estilos.css">
   </head>
   <body>
       <main class="tarjeta">
           <h3>Los resultados del área y perímetro del <?= e($FIGURAS[$figura]) ?> con los datos que me has pasado son:</h3>
           <p>Área: <?= e(number_format($resultado['area'], 2, ',', '.')) ?> cm<sup>2</sup></p>
           <p>Perímetro: <?= e(number_format($resultado['perimetro'], 2, ',', '.')) ?> cm</p>
           <p class="boton"><a href="index.php">Elegir otra figura</a></p>
       </main>
   </body>
   </html>
