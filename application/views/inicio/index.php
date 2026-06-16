<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HospitalDB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">

        <a class="navbar-brand" href="<?= site_url('inicio') ?>">
            HospitalDB
        </a>

        <div class="navbar-nav">
            <a class="nav-link" href="<?= site_url('pacientes') ?>">
                Pacientes
            </a>

            <a class="nav-link" href="<?= site_url('hospitalizaciones') ?>">
                Hospitalizaciones
            </a>

            <a class="nav-link" href="<?= site_url('salas') ?>">
                Salas
            </a>

            <a class="nav-link" href="<?= site_url('tiposdiagnostico') ?>">
                Tipos de Diagnóstico
            </a>
        </div>

    </div>
</nav>

<div class="container mt-5 text-center">

    <h1>Sistema de Gestión de Hospitalización</h1>

    <p class="lead">
        Administra pacientes, hospitalizaciones,
        salas y tipos de diagnóstico de forma sencilla.
    </p>

    <img src="<?= base_url('assets/img/hospital.png') ?>" 
     class="img-fluid rounded"
     style="width:800px;"
     alt="Hospital">

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>