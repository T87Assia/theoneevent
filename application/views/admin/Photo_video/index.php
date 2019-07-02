<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-camera-retro"></i> Photo video</h4>
        </div>
        <div class="panel-body">
            <div class="tool-box">
                <a href="<?php echo base_url() . 'admin/Photo_video/create'; ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i> Ajout une Photo video</a>
            </div>
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>Num</th>
                        <th>Type</th>
                        <th>Prix</th>
                        <th>Description</th>
                        <th>Outils</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no=1; ?>
                    <?php foreach($dok->result() as $Photo_video): ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $Photo_video->nama_Photo_video ?></td>
                            <td><?= $Photo_video->harga_Photo_video ?></td>
                            <td><?= $Photo_video->deskripsi ?></td>
                            <td width="10%">
                                <a href="<?php echo base_url() . 'admin/Photo_video/edit/'.$Photo_video->Photo_video_id; ?>" class="btn btn-xs btn-info" title="Modifier"><i class="fa fa-pencil fa-fw"></i></a>
                                <a href="<?php echo base_url() . 'admin/Photo_video/delete/'.$Photo_video->Photo_video_id; ?>" class="btn btn-xs btn-danger" title="Supprimer" onclick="return confirm('Vous êtes sûr de vouloir supprimer ces données ?')"><i class="fa fa-trash fa-fw"></i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>