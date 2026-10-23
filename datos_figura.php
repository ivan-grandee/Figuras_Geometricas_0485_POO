<?php
require_once __DIR__ . '/php/figuras.php';

// Si alguien entra directamente sin haber elegido figura, lo mandamos al index
$figura = $_SESSION['figura'] ?? '';
if (!array_key_exists($figura, $FIGURAS)) {
    header('Location: index.php');
    exit;
}

// comprueba si la figura que se recibe esta dentro del array de FIGURAS

$errorDatos = $_SESSION['errorDatos'] ?? '';
unset($_SESSION['errorDatos']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos de tu figura</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <main class="tarjeta">
    <h1>Como has seleccionado un <?= e($FIGURAS[$figura]) ?> necesito que me des los siguientes datos:</h1>

    <form id="formDatos" action="php/validaDatos.php" method="post" novalidate>
        <?php foreach ($CAMPOS[$figura] as $name => $etiqueta): ?>
            <label for="<?= e($name) ?>"><?= e($etiqueta) ?> en cm</label>
            <input type="number" id="<?= e($name) ?>" name="<?= e($name) ?>" step="any" min="0">
            <span class="error" id="error-<?= e($name) ?>"></span>
        <?php endforeach; ?>

        <span class="error"><?= e($errorDatos) ?></span>
        <input type="submit" value="Calcular">
    </form>
    <p class="boton"><a href="index.php">Elegir otra figura</a></p>
    </main>
    <script src="js/validaDatos.js"></script>

</body>
</html>