<div class="form-group">
    <label for="nama_dekorasi" class="control-label col-sm-3"> Nom de la décoration </label>
    <div class="col-sm-6">
        <input type="text" name="nama_dekorasi" value="<?php echo set_value('nama_dekorasi',isset($dekorasi->nama_dekorasi) ? $dekorasi->nama_dekorasi : ''); ?>" class="form-control">
        <?php echo form_error('nama_dekorasi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_dekorasi" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga_dekorasi" value="<?php echo set_value('harga_dekorasi',isset($dekorasi->harga_dekorasi) ? $dekorasi->harga_dekorasi : ''); ?>" class="form-control">
        <?php echo form_error('harga_dekorasi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($dekorasi->deskripsi) ? $dekorasi->deskripsi : ''); ?></textarea>
        <?php echo form_error('deskripsi'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Décoration photo </label>
    <div class="col-sm-4">
        <input type="file" name="foto" value="">
        <?php echo form_error('foto'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/dekorasi'; ?>" class="btn btn-default">Annuler</a>
</div>
