<?php
require_once __DIR__ .'figuras.php';

// Si alguien entra directamente sin haber elegido figura, lo mandamos al index
$figura = $_SESSION['figura'] ?? '';
if (!array_key_exists($figura, $FIGURAS)) {
    header('Location: index.php');
    exit;
}

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
    <h1>Como has seleccionado un <?= e($FIGURAS[$figura]) ?> necesito que me des los siguientes datos:</h1>

    <form id="formDatos" action="php/procesar_datos.php" method="post" novalidate>
        <?php foreach ($CAMPOS[$figura] as $name => $etiqueta): ?>
            <label for="<?= e($name) ?>"><?= e($etiqueta) ?></label>
            <input type="number" id="<?= e($name) ?>" name="<?= e($name) ?>" step="any" min="0">
            <span class="error" id="error-<?= e($name) ?>"></span>
            <br>
        <?php endforeach; ?>

        <span class="error"><?= e($errorDatos) ?></span>
        <input type="submit" value="Calcular">
    </form>
    <script src="js/validaDatos.js"></script>

</body>
</html>