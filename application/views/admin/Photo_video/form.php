<div class="form-group">
    <label for="nama_Photo_video" class="control-label col-sm-3"> Mode de Photo video </label>
    <div class="col-sm-6">
        <input type="text" name="nama_Photo_video" value="<?php echo set_value('nama_Photo_video',isset($Photo_video->nama_Photo_video) ? $Photo_video->nama_Photo_video : ''); ?>" class="form-control">
        <?php echo form_error('Mode_immortalisation'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_Photo_video" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga_Photo_video" value="<?php echo set_value('harga_Photo_video',isset($Photo_video->harga_Photo_video) ? $Photo_video->harga_Photo_video : ''); ?>" class="form-control">
        <?php echo form_error('Prix_immortalisation'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($Photo_video->deskripsi) ? $Photo_video->deskripsi : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/Photo_video'; ?>" class="btn btn-default">Annuler</a>
</div>
