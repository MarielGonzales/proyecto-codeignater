<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sala - Form</title>
</head>
<body>

<h2><?= isset($sala) ? 'Editar' : 'Nueva' ?> Sala</h2>

<?php
$accion = isset($sala)
    ? site_url('salas/actualizar/'.$sala['id'])
    : site_url('salas/guardar');
?>

<?= form_open($accion) ?>

<label>Nombre</label>
<input type="text" name="nombre"
value="<?= isset($sala) ? $sala['nombre'] : set_value('nombre') ?>" required>
<br><br>

<label>Capacidad</label>
<input type="number" name="capacidad"
value="<?= isset($sala) ? $sala['capacidad'] : set_value('capacidad') ?>" required>
<br><br>

<button type="submit">Guardar</button>

<?= form_close() ?>

</body>
</html>