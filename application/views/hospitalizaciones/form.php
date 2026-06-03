<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hospitalización - Form</title>
</head>
<body>

<h2><?= isset($hospitalizacion) ? 'Editar' : 'Nueva' ?> Hospitalización</h2>

<?php
$accion = isset($hospitalizacion)
    ? site_url('hospitalizaciones/actualizar/'.$hospitalizacion['id'])
    : site_url('hospitalizaciones/guardar');
?>

<?= form_open($accion) ?>

<label>Paciente ID</label>
<input type="number" name="paciente_id"
value="<?= isset($hospitalizacion) ? $hospitalizacion['paciente_id'] : set_value('paciente_id') ?>" required>
<br><br>

<label>Sala ID</label>
<input type="number" name="sala_id"
value="<?= isset($hospitalizacion) ? $hospitalizacion['sala_id'] : set_value('sala_id') ?>" required>
<br><br>

<label>Fecha Ingreso</label>
<input type="date" name="fecha_ingreso"
value="<?= isset($hospitalizacion) ? $hospitalizacion['fecha_ingreso'] : set_value('fecha_ingreso') ?>" required>
<br><br>

<label>Fecha Alta</label>
<input type="date" name="fecha_alta"
value="<?= isset($hospitalizacion) ? $hospitalizacion['fecha_alta'] : set_value('fecha_alta') ?>">
<br><br>

<button type="submit">Guardar</button>

<?= form_close() ?>

</body>
</html>