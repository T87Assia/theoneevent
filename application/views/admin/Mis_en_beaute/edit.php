<div class="col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-female"></i> Modifier Mise en beauté : <?php echo $Mis_en_beaute->nama_Mis_en_beaute; ?></h4>
        </div>
        <div class="panel-body">
            <form action="<?php  echo base_url() . 'admin/Mis_en_beaute/update/'.$Mis_en_beaute->Mis_en_beaute_id; ?>" class="form-horizontal" method="post">
                <?php include 'form.php'; ?>
            </form>
        </div>
    </div>
</div>
