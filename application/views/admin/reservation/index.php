<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-envelope"></i> Commande</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Code de la commande</th>
                        <th>Nom du client</th>
                        <th>Statut</th>
                        <th>Outils</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($transactions as $transaction): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td>#<?= $transaction->id_reservation ?></td>
                            <td><?= $transaction->nama ?></td>
                            <td><?= $transaction->statut ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/reservation/detail/'.$transaction->id_reservation; ?>" class="btn btn-xs btn-info" title="Voir"><i class="fa fa-eye fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
