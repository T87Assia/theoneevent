<?php
    $uri = $this->uri->segment(2);
?>
<!--Sidemenu-->
<div class="col-sm-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Données de base</h3>
        </div>
        <div class="list-group">
            <a href="<?= base_url() . 'admin/'; ?>" class="list-group-item <?= ($uri == '') ? 'active' : ''; ?>"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
            <a href="<?= base_url() . 'admin/gedung'; ?>" class="list-group-item <?= ($uri == 'gedung') ? 'active' : ''; ?>"><i class="fa fa-building-o fa-fw"></i> Local</a>
            <a href="<?= base_url() . 'admin/dekorasi'; ?>" class="list-group-item <?= ($uri == 'dekorasi') ? 'active' : ''; ?>"><i class="fa fa-diamond fa-fw"></i> Déco et Animation</a>
            <a href="<?= base_url() . 'admin/katering'; ?>" class="list-group-item <?= ($uri == 'katering') ? 'active' : ''; ?>"><i class="fa fa-cutlery fa-fw"></i> Restauration</a>
            <a href="<?= base_url() . 'admin/dokumentasi'; ?>" class="list-group-item <?= ($uri == 'dokumentasi') ? 'active' : ''; ?>"><i class="fa fa-camera-retro fa-fw"></i> Photo video</a>
            <a href="<?= base_url() . 'admin/Mis_en_beaute'; ?>" class="list-group-item <?= ($uri == 'Mis_en_beaute') ? 'active' : ''; ?>"><i class="fa fa-female fa-fw"></i> Mis_en_beaute</a>
            <a href="<?= base_url() . 'admin/user'; ?>" class="list-group-item <?= ($uri == 'user') ? 'active' : ''; ?>"><i class="fa fa-user fa-fw"></i> Données utilisateur</a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Données des Comandes</h3>
        </div>
        <div class="list-group">
            <a href="<?php echo base_url() . 'admin/pelanggan'; ?>" class="list-group-item <?= ($uri == 'pelanggan') ? 'active' : ''; ?>"><i class="fa fa-male fa-fw"></i> Client</a>
            <a href="<?php echo base_url() . 'admin/pemesanan'; ?>" class="list-group-item <?= ($uri == 'pemesanan') ? 'active' : ''; ?>"><i class="fa fa-envelope-o fa-fw"></i> Commande</a>
            <a href="<?php echo base_url() . 'admin/pembayaran'; ?>" class="list-group-item <?= ($uri == 'pembayaran') ? 'active' : ''; ?>"><i class="fa fa-file-o fa-fw"></i> Preuve de paiement</a>
        </div>
    </div>
</div>