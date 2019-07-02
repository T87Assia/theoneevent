<div class="form-group">
    <label for="jenis" class="control-label col-sm-3"> Type </label>
    <div class="col-sm-6">
        <input type="text" name="jenis" value="<?php echo set_value('jenis',isset($Deco_et_Animation->jenis) ? $Deco_et_Animation->jenis : ''); ?>" class="form-control">
        <?php echo form_error('Type'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga" value="<?php echo set_value('harga',isset($Deco_et_Animation->harga) ? $Deco_et_Animation->harga : ''); ?>" class="form-control">
        <?php echo form_error('Prix'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($Deco_et_Animation->deskripsi) ? $Deco_et_Animation->deskripsi : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/Deco_et_Animation'; ?>" class="btn btn-default">Annuler</a>
</div>