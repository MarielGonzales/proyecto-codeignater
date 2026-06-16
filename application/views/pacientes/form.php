<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Paciente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body >

<?php $this->load->view('templates/navbar'); ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-1">
                        <?= isset($paciente) ? 'Editar Paciente' : 'Nuevo Paciente' ?>
                    </h4>
                </div>
                <div class="card-body">
                    <?php
                    $accion = isset($paciente)
                        ? site_url('pacientes/actualizar/'.$paciente['id'])
                        : site_url('pacientes/guardar');
                    ?>

                    <?= form_open($accion) ?>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text"
                               name="nombre"
                               class="form-control"
                               value="<?= isset($paciente) ? $paciente['nombre'] : set_value('nombre') ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Apellido</label>
                        <input type="text"
                               name="apellido"
                               class="form-control"
                               value="<?= isset($paciente) ? $paciente['apellido'] : set_value('apellido') ?>"
                               required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Diagnóstico</label>
                        <input type="text"
                               name="diagnostico"
                               class="form-control"
                               value="<?= isset($paciente) ? $paciente['diagnostico'] : set_value('diagnostico') ?>"
                               required>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="<?= site_url('pacientes') ?>"
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

</body>
</html>