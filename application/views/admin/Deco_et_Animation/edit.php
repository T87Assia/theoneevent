<div class="col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-diamond"></i> Modifier la Déco et Animation : <?php echo $Deco_et_Animation->nama_Deco_et_Animation; ?></h4>
        </div>
        <div class="panel-body">
            <form action="<?php  echo base_url() . 'admin/Deco_et_Animation/update/'.$Deco_et_Animation->Deco_et_Animation_id; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <?php include 'form.php'; ?>
            </form>
        </div>
    </div>
</div>
