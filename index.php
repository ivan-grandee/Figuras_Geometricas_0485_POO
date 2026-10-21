<?php
require_once __DIR__ . '/php/figuras.php';

$figuraSel = $_SESSION['figura'] ?? '';
$errorIndex = $_SESSION['errorIndex'] ?? '';
unset($_SESSION['errorIndex']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Figuras Geométricas</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header class="cabecera">
        <h1> Figuras Geométricas</h1>
    </header>

    <main class="tarjeta">
        <h3>Dime, ¿con qué figura quieres trabajar?</h3>

        <form id="formFigura" action="php/validacionIndex.php" method="post" novalidate>
            <label for="figura">Figura</label>
            <select id="figura" name="figura">
                <option value="" <?= $figuraSel === '' ? 'selected' : '' ?>>Selecciona alguna figura</option>
                <?php foreach ($FIGURAS as $clave => $nombre): ?>
                    <option value="<?= e($clave) ?>" <?= $figuraSel === $clave ? 'selected' : '' ?>>
                        <?= e($nombre) ?>
                    </option>
                <?php endforeach; ?>
            </select>
            <input type="submit" value="Seleccionar figura" name="Figura_seleccionada">
        </form>
        <span class="error" id="error-figura"><?= e($errorIndex) ?></span>

    </main>

    <script src="js/validacionIndex.js"></script>
</body>
</html>