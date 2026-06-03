<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Salas</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2>Lista de Salas</h2>

    <a href="<?= site_url('salas/crear') ?>" class="btn btn-primary mb-3">
        + Nueva Sala
    </a>

    <table class="table table-striped table-bordered">

        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>

        <?php foreach($salas as $s): ?>
            <tr>
                <td><?= $s['id'] ?></td>
                <td><?= $s['nombre'] ?></td>
                <td><?= $s['capacidad'] ?></td>

                <td>
                    <a href="<?= site_url('salas/editar/'.$s['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="<?= site_url('salas/eliminar/'.$s['id']) ?>" class="btn btn-danger btn-sm"
                       onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>

        </tbody>

    </table>

</div>

</body>
</html>