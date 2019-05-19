<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-female"></i> Données du maquillage</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/rias/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajouter du maquillage</a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Photo</th>
                        <th>Type</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Outils</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($riases->result() as $rias): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><img src="<?= base_url() . 'uploads/' . $rias->gambar; ?>" alt="" class="image-display"></td>
                            <td><?= $rias->nama_rias ?></td>
                            <td>Rp <?= $rias->harga_rias ?></td>
                            <td><?= $rias->deskripsi ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/rias/edit/'.$rias->rias_id; ?>" class="btn btn-xs btn-info" title="Modifier"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/rias/delete/'.$rias->rias_id; ?>" class="btn btn-xs btn-danger" title="Supprimer" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
