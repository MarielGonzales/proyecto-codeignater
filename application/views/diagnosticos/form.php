<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diagnóstico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php $this->load->view('templates/navbar'); ?>

<?php
$accion = isset($diagnostico)
    ? site_url('tiposdiagnostico/actualizar/'.$diagnostico['id'])
    : site_url('tiposdiagnostico/guardar');

$editando = isset($diagnostico);
?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">
                        <?= $editando ? 'Editar Diagnóstico' : 'Nuevo Diagnóstico' ?>
                    </h4>
                </div>

                <div class="card-body">

                    <?= form_open($accion) ?>

                    <div class="mb-3">
                        <label class="form-label">Nombre</label>
                        <input type="text"
                               name="nombre"
                               class="form-control"
                               value="<?= $editando ? $diagnostico['nombre'] : set_value('nombre') ?>"
                               required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="<?= site_url('tiposdiagnostico') ?>"
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