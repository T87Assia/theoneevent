<div class="form-group">
    <label for="nama_Deco_et_Animation" class="control-label col-sm-3"> Nom de la déco animation </label>
    <div class="col-sm-6">
        <input type="text" name="nama_Deco_et_Animation" value="<?php echo set_value('nama_Deco_et_Animation',isset($Deco_et_Animation->nama_Deco_et_Animation) ? $Deco_et_Animation->nama_Deco_et_Animation : ''); ?>" class="form-control">
        <?php echo form_error('Nom_de_la_décoration'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_Deco_et_Animation" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga_Deco_et_Animation" value="<?php echo set_value('harga_Deco_et_Animation',isset($Deco_et_Animation->harga_Deco_et_Animation) ? $Deco_et_Animation->harga_Deco_et_Animation : ''); ?>" class="form-control">
        <?php echo form_error('Prix_decoration'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($Deco_et_Animation->deskripsi) ? $Deco_et_Animation->deskripsi : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Photo du Déco et Animation </label>
    <div class="col-sm-4">
        <input type="file" name="foto" value="">
        <?php echo form_error('Photo'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/Deco_et_Animation'; ?>" class="btn btn-default">Annuler</a>
</div>
