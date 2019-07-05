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
            <a href="<?= base_url() . 'admin/salle'; ?>" class="list-group-item <?= ($uri == 'salle') ? 'active' : ''; ?>"><i class="fa fa-building-o fa-fw"></i> Salles des Fêtes</a>
            <a href="<?= base_url() . 'admin/decoration'; ?>" class="list-group-item <?= ($uri == 'decoration') ? 'active' : ''; ?>"><i class="fa fa-diamond fa-fw"></i> Décorations et Animations</a>
            <a href="<?= base_url() . 'admin/restauration'; ?>" class="list-group-item <?= ($uri == 'restauration') ? 'active' : ''; ?>"><i class="fa fa-cutlery fa-fw"></i> Restaurations</a>
            <a href="<?= base_url() . 'admin/dragee'; ?>" class="list-group-item <?= ($uri == 'dragee') ? 'active' : ''; ?>"><i class="fa fa-gift fa-fw"></i> Dragées</a>
            <a href="<?= base_url() . 'admin/beaute'; ?>" class="list-group-item <?= ($uri == 'beaute') ? 'active' : ''; ?>"><i class="fa fa-female fa-fw"></i> Mise en beauté</a>
        </div>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Données des Comandes</h3>
        </div>
        <div class="list-group">
            <a href="<?php echo base_url() . 'admin/client'; ?>" class="list-group-item <?= ($uri == 'client') ? 'active' : ''; ?>"><i class="fa fa-male fa-fw"></i> Clients</a>
            <a href="<?php echo base_url() . 'admin/reservation'; ?>" class="list-group-item <?= ($uri == 'reservation') ? 'active' : ''; ?>"><i class="fa fa-envelope-o fa-fw"></i> Commandes</a>
            <a href="<?php echo base_url() . 'admin/admin'; ?>" class="list-group-item <?= ($uri == 'admin') ? 'active' : ''; ?>"><i class="fa fa-file-o fa-fw"></i> Preuves des paiements</a>
        </div>
    </div>
	<div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-hdd-o"></i> Données d'administration</h3>
        </div>
        <div class="list-group">
            <a href="<?= base_url() . 'admin/user'; ?>" class="list-group-item <?= ($uri == 'user') ? 'active' : ''; ?>"><i class="fa fa-user fa-fw"></i> Données administrateurs</a>
        </div>
    </div>
</div>
