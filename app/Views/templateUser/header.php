<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <title><?= $title ?></title>
</head>
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>

<nav class="navbar sticky-bottom navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-end" href="#" style="gap: 5px;">
            <img src="<?= base_url('container/logoPenalaran.png'); ?>" alt="Logo" width="30" height="30"
                class="d-inline-block">
            <div>
                <b>PENALARAN</b>
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/draflapor'); ?>">DaftarLaporan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('/laporan'); ?>">Laporkan!</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href=" <?= base_url('/'); ?>" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>