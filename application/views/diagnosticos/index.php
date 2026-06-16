<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Diagnósticos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="container mt-4">

    <h2>Lista de Diagnósticos</h2>

    <a href="<?= site_url('tiposdiagnostico/crear') ?>" class="btn btn-primary mb-3">
        + Nuevo Diagnóstico
    </a>

    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($diagnosticos as $d): ?>
            <tr>
                <td><?= $d['id'] ?></td>
                <td><?= $d['nombre'] ?></td>

                <td>
                    <a href="<?= site_url('tiposdiagnostico/editar/'.$d['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= site_url('tiposdiagnostico/eliminar/'.$d['id']) ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>