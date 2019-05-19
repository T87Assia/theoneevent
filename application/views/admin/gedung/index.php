<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-building"></i> Données du local</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/gedung/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajouter un local</a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Non</th>
                        <th>Noms du local</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Outils</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($gedungs->result() as $gedung): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><img src="<?= base_url() . 'uploads/' . $gedung->foto ?>" alt="" class="image-display"> <?= $gedung->nama_gedung ?></td>
                            <td>Rp. <?= $gedung->harga_gedung ?></td>
                            <td><?= $gedung->deskripsi ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/gedung/edit/'.$gedung->gedung_id; ?>" class="btn btn-xs btn-info" title="Modifier"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/gedung/delete/'.$gedung->gedung_id; ?>" class="btn btn-xs btn-danger" title="Supprimer" onclick="return confirm('Anda yakin ingin menghapus data ini ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
