<div class="col-sm-9">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-diamond"></i> Modifier la Décoration et Animation : <?php echo $decoration->decoration_nom; ?></h4>
        </div>
        <div class="panel-body">
            <form action="<?php  echo base_url() . 'admin/decoration/update/'.$decoration->decoration_id; ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                <?php include 'form.php'; ?>
            </form>
        </div>
    </div>
</div>
