<?php
    $uri = $this->uri->segment(2);
?>
<!--Sidemenu-->
<div class="col-sm-3">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h3 class="panel-title"><i class="fa fa-list"></i> Menu principal</h3>
        </div>
        <div class="list-group">
            <a href="<?= base_url() . 'dashboard/'; ?>" class="list-group-item <?= ($uri == '') ? 'active' : ''; ?>"><i class="fa fa-dashboard fa-fw"></i> Tableau de bord</a>
            <a href="<?= base_url() . 'client/confirmation'; ?>" class="list-group-item <?= ($uri == 'confirmation') ? 'active' : ''; ?>"><i class="fa fa-money fa-fw"></i> Confirmation de paiement</a>
        </div>
    </div>
</div>
