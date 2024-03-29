<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-male"></i> Client</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/client/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajouter un client</a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Nom</th>
                        <th>GSM</th>
                        <th>Adresse</th>
                        <th>Email</th>
                        <th>Outils</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($clients->result() as $client): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $client->nama ?></td>
                            <td><?= $client->tel ?></td>
                            <td><?= $client->adresse ?></td>
                            <td><?= $client->email ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/client/edit/'.$client->client_id; ?>" class="btn btn-xs btn-info" title="Modifier"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/client/delete/'.$client->client_id; ?>" class="btn btn-xs btn-danger" title="Supprimer" onclick="return confirm('Vous êtes sûr de vouloir supprimer ces données ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>