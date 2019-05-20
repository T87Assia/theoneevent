<div class="form-group">
    <label for="nama_rias" class="control-label col-sm-3"> Nom Maquillage </label>
    <div class="col-sm-6">
        <input type="text" name="nama_rias" value="<?php echo set_value('nama_rias',isset($rias->nama_rias) ? $rias->nama_rias : ''); ?>" class="form-control">
        <?php echo form_error('Nom_Maquillage'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_rias" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga_rias" value="<?php echo set_value('harga_rias',isset($rias->harga_rias) ? $rias->harga_rias : ''); ?>" class="form-control">
        <?php echo form_error('Prix_maquillage'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($rias->deskripsi) ? $rias->deskripsi : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label for="gambar" class="control-label col-sm-3"> Photo </label>
    <div class="col-sm-4">
        <input type="file" name="gambar">
        <?php echo form_error('Photo'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/rias'; ?>" class="btn btn-default">Annuler</a>
</div>
