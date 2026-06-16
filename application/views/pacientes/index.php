<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pacientes</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="container mt-4">

    <h2>Lista de Pacientes</h2>

    <a href="<?= site_url('pacientes/crear') ?>" class="btn btn-primary mb-3">
        + Nuevo Paciente
    </a>

    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Diagnóstico ID</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($pacientes as $p): ?>
            <tr>
                <td><?= $p['id'] ?></td>
                <td><?= $p['nombre'] ?></td>
                <td><?= $p['apellido'] ?></td>
                <td><?= $p['diagnostico'] ?></td>

                <td>
                    <a href="<?= site_url('pacientes/editar/'.$p['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= site_url('pacientes/eliminar/'.$p['id']) ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>