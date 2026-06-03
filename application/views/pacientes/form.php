<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paciente - Form</title>
</head>
<body>

<h2><?= isset($paciente) ? 'Editar' : 'Nuevo' ?> Paciente</h2>

<?php
$accion = isset($paciente)
    ? site_url('pacientes/actualizar/'.$paciente['id'])
    : site_url('pacientes/guardar');
?>

<?= form_open($accion) ?>

<label>Nombre</label>
<input type="text" name="nombre"
value="<?= isset($paciente) ? $paciente['nombre'] : set_value('nombre') ?>" required>
<br><br>

<label>Apellido</label>
<input type="text" name="apellido"
value="<?= isset($paciente) ? $paciente['apellido'] : set_value('apellido') ?>" required>
<br><br>

<label>Diagnóstico ID</label>
<input type="number" name="diagnostico_id"
value="<?= isset($paciente) ? $paciente['diagnostico_id'] : set_value('diagnostico_id') ?>" required>
<br><br>

<button type="submit">Guardar</button>

<?= form_close() ?>

</body>
</html>