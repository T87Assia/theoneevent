<div class="form-group">
    <label for="nama_dokumentasi" class="control-label col-sm-3"> Nom de l'immortalisation </label>
    <div class="col-sm-6">
        <input type="text" name="nama_dokumentasi" value="<?php echo set_value('nama_dokumentasi',isset($dokumentasi->nama_dokumentasi) ? $dokumentasi->nama_dokumentasi : ''); ?>" class="form-control">
        <?php echo form_error('nama_dokumentasi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_dokumentasi" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga_dokumentasi" value="<?php echo set_value('harga_dokumentasi',isset($dokumentasi->harga_dokumentasi) ? $dokumentasi->harga_dokumentasi : ''); ?>" class="form-control">
        <?php echo form_error('harga_dokumentasi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($dokumentasi->deskripsi) ? $dokumentasi->deskripsi : ''); ?></textarea>
        <?php echo form_error('deskripsi'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/dokumentasi'; ?>" class="btn btn-default">Annuler</a>
</div>
