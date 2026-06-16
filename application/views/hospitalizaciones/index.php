<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Hospitalizaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php $this->load->view('templates/navbar'); ?>
<div class="container mt-4">

    <h2>Lista de Hospitalizaciones</h2>

    <a href="<?= site_url('hospitalizaciones/crear') ?>" class="btn btn-primary mb-3">
        + Nueva Hospitalización
    </a>

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>       
                <th>Paciente</th>
                <th>Sala</th>
                <th>Fecha Ingreso</th>
                <th>Fecha Alta</th>
                <th>Acciones</th>   
            </tr>
        </thead>

        <tbody>
        <?php foreach($hospitalizaciones as $h): ?>
            <tr>
                <td><?= $h['id'] ?></td>             
                <td><?= $h['paciente'] ?></td>          
                <td><?= $h['sala'] ?></td>
                <td><?= $h['fecha_ingreso'] ?></td>
                <td><?= empty($h['fecha_alta']) || $h['fecha_alta'] == '0000-00-00' 
                        ? 'Aun hospitalizado' 
                        : $h['fecha_alta']; ?></td>    
                <td>
                    <a href="<?= site_url('hospitalizaciones/editar/'.$h['id']) ?>" 
                       class="btn btn-success btn-sm">Editar</a>   
                    <a href="<?= site_url('hospitalizaciones/eliminar/'.$h['id']) ?>" 
                       class="btn btn-danger btn-sm"
                       onclick="return confirm('¿Eliminar?')">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>
</body>
</html>