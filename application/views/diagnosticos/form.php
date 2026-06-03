<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diagnóstico - Form</title>
</head>
<body>

<h2><?= isset($diagnostico) ? 'Editar' : 'Nuevo' ?> Diagnóstico</h2>

<?php
$accion = isset($diagnostico)
    ? site_url('tiposdiagnostico/actualizar/'.$diagnostico['id'])
    : site_url('tiposdiagnostico/guardar');
?>

<?= form_open($accion) ?>

<label>Nombre</label>
<input type="text" name="nombre"
value="<?= isset($diagnostico) ? $diagnostico['nombre'] : set_value('nombre') ?>" required>
<br><br>

<button type="submit">Guardar</button>

<?= form_close() ?>

</body>
</html>