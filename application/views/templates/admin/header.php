<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= ($this->session->flashdata('role') == 'admin') ? 'Admin' : 'Guest' ?> | Tableau de bord</title>
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/bootstrap.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo base_url() . 'assets/css/admin-theme.css'; ?>">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <a href="#" class="navbar-brand">Panneau d'administration</a>
            </div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?= base_url() . 'admin/logout'; ?>">Se déconnecter</a></li>
            </ul>
        </div>
    </nav>

    <!--cover-->
    <section id="cover">
        <div class="container-fluid">
            <div class="row">
                <div class="jumbotron">
                    <h3>THE ONE EVENT <br> <small style="color:#fff;">Votre partenaire de bonheur</small> </h3>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
