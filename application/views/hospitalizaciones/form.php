<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hospitalización</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php $this->load->view('templates/navbar'); ?>

<?php
$accion = isset($hospitalizacion)
    ? site_url('hospitalizaciones/actualizar/'.$hospitalizacion['id'])
    : site_url('hospitalizaciones/guardar');

$editando = isset($hospitalizacion);
?>

<div class="container mt-5">

    <div class="row justify-content-center">

        <div class="col-md-8">

            <div class="card shadow">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <?= $editando ? 'Editar Hospitalización' : 'Nueva Hospitalización' ?>
                    </h4>
                </div>

                <div class="card-body">

                    <?= form_open($accion) ?>

                    <!-- PACIENTE -->
                    <div class="mb-3">
                        <label class="form-label">Paciente</label>

                        <select name="paciente_id" class="form-select" required>
                            <?php foreach($pacientes as $p): ?>
                                <option value="<?= $p['id'] ?>"
                                    <?= $editando && $hospitalizacion['paciente_id'] == $p['id'] ? 'selected' : '' ?>>
                                    <?= $p['nombre'].' '.$p['apellido'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- SALA -->
                    <div class="mb-3">
                        <label class="form-label">Sala</label>

                        <select name="sala_id" class="form-select" required>
                            <?php foreach($salas as $s): ?>
                                <option value="<?= $s['id'] ?>"
                                    <?= $editando && $hospitalizacion['sala_id'] == $s['id'] ? 'selected' : '' ?>>
                                    <?= $s['nombre'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <!-- FECHA INGRESO -->
                    <div class="mb-3">
                        <label class="form-label">Fecha de Ingreso</label>

                        <input type="date"
                               name="fecha_ingreso"
                               class="form-control"
                               value="<?= $editando ? $hospitalizacion['fecha_ingreso'] : '' ?>"
                               required>
                    </div>

                    <!-- FECHA ALTA -->
                    <div class="mb-3">
                        <label class="form-label">Fecha de Alta</label>

                        <input type="date"
                               name="fecha_alta"
                               class="form-control"
                               value="<?= $editando ? $hospitalizacion['fecha_alta'] : '' ?>">
                    </div>

                    <!-- BOTONES -->
                    <div class="d-flex justify-content-between">

                        <a href="<?= site_url('hospitalizaciones') ?>"
                           class="btn btn-secondary">
                           Volver
                        </a>

                        <button type="submit"
                                class="btn btn-success">
                            Guardar
                        </button>

                    </div>

                    <?= form_close() ?>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>