<div class="form-group">
    <label for="nama_katering" class="control-label col-sm-3"> Nom du plat </label>
    <div class="col-sm-6">
        <input type="text" name="nama_katering" value="<?php echo set_value('nama_katering',isset($katering->nama_katering) ? $katering->nama_katering : ''); ?>" class="form-control">
        <?php echo form_error('Nom du plat'); ?>
    </div>
</div>
<div class="form-group">
    <label class="control-label col-sm-3"> Montant </label>
    <div class="col-sm-4">
        <input type="number" name="jumlah" value="<?php echo set_value('harga_katering',isset($katering->jumlah) ? $katering->jumlah : ''); ?>" class="form-control">
        <?php echo form_error('Montant'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_katering" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="number" name="harga_katering" value="<?php echo set_value('harga_katering',isset($katering->harga_katering) ? $katering->harga_katering : ''); ?>" class="form-control">
        <?php echo form_error('Prix_du_plat'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-6">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($katering->deskripsi) ? $katering->deskripsi : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/katering'; ?>" class="btn btn-default">Annuler</a>
</div>
