<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

	<title>THE ONE EVENT | Organisation d'evennement Haut de gamme</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="assets/css/custom-fonts.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Basculer la navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">THE ONE EVENT</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#register">Inscription</a>
                    </li>
                    <li>
                        <a href="<?= base_url() . 'login'; ?>">Se connecter</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Bienvenue à THE ONE EVENT</div>
                <div class="intro-heading">C'est votre partenaire de bonheur</div>
                <a href="#services" class="page-scroll btn btn-xl">Dites nous en plus</a>
            </div>
        </div>
    </header>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Service</h2>
                    <h3 class="section-subheading text-muted">Le meilleur service de notre part pour vous.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-building-o fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Local</h4>
                    <p class="text-muted">Choisir le local qui convient aux critères dont vous avez besoin</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cutlery fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Restauration</h4>
                    <p class="text-muted">Donnez le meilleur menu pour vos invités de nos meilleurs chefs</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-camera-retro fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Photo video</h4>
                    <p class="text-muted">Capturez vos moments de l'événment avec les meilleurs résultats de nos meilleurs photographes</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-female fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Mise en beauté</h4>
                    <p class="text-muted">Devenez le roi et la reine de votre événement avec le soin de nos meilleurs expert de beauté</p>
                </div>
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-diamond fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Déco animation</h4>
                    <p class="text-muted">Rendez votre événement festif avec de belles décorations et de mellieur animations</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="register">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Formulaire d'inscription</h2>
                    <h3 class="section-subheading text-muted">Inscrivez-vous et planifiez votre événement pour les réservations.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="<?php echo base_url() . 'daftar'; ?>" method="post">
                        <div class="row">
							<div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control" placeholder="Nom *" value="<?php echo set_value('nama',isset($pelanggan->nama) ? $pelanggan->nama : ''); ?>" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('nama'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_telp" class="form-control" placeholder="GSM *" value="<?php echo set_value('nama',isset($pelanggan->no_telp) ? $pelanggan->no_telp : ''); ?>">
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('no_telp'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Email *" id="email" value="<?php echo set_value('nama',isset($pelanggan->email) ? $pelanggan->email : ''); ?>" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('email'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Mot de passe *" id="password" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('password'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="confirm_password" class="form-control" placeholder="Confirmer le mot de passe *" id="confirm_password" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('confirm_password'); ?></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control" placeholder="Adresse *" value="<?php echo set_value('nama',isset($pelanggan->alamat) ? $pelanggan->alamat : ''); ?>" required>
                                    <p class="help-block text-danger"><?php echo $this->session->flashdata('alamat'); ?></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">S'inscrire <i class="fa fa-send"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center copyright">Copyright © 2019 - THE ONE EVENT</div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>

    <!-- jQuery -->
    <script src="assets/js/hideShowPassword.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="assets/js/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="assets/js/jqBootstrapValidation.js"></script>

    <!-- Theme JavaScript -->
    <script src="assets/js/agency.min.js"></script>

	<script>
		$('#password, #confirm_password').showPassword('focus', {
			show: false,
			toggle: { className: 'btn btn-primary', styles: { position: 'absolute', 'margin-right': '12px' } }			
		});
	</script>

</body>

</html>
