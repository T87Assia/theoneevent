<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-diamond"></i> Paiement</h4>
        </div>
        <div class="panel-body">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Code de la Commande</th>
                        <th>Coordonnées bancaires</th>
                        <th>Preuve</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($transactions as $admin): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $admin->reservation_id ?></td>
                            <td>
                              <strong><?= $admin->nom_banque ?></strong> <br>
                              <?= $admin->n_compte ?> <br>
                              a.n <?= $admin->proprietaire ?>
                            </td>
                            <td>
                              <img src="<?= base_url() . 'uploads/'.$admin->photo ?>" alt="" width="200">
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
