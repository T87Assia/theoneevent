<div class="form-group">
    <label for="nama_Mis_en_beaute" class="control-label col-sm-3"> Nom Mis_en_beaute </label>
    <div class="col-sm-6">
        <input type="text" name="nama_Mis_en_beaute" value="<?php echo set_value('nama_Mis_en_beaute',isset($Mis_en_beaute->nama_Mis_en_beaute) ? $Mis_en_beaute->nama_Mis_en_beaute : ''); ?>" class="form-control">
        <?php echo form_error('Nom_Mis_en_beaute'); ?>
    </div>
</div>
<div class="form-group">
    <label for="harga_Mis_en_beaute" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="harga_Mis_en_beaute" value="<?php echo set_value('harga_Mis_en_beaute',isset($Mis_en_beaute->harga_Mis_en_beaute) ? $Mis_en_beaute->harga_Mis_en_beaute : ''); ?>" class="form-control">
        <?php echo form_error('Prix_Mis_en_beaute'); ?>
    </div>
</div>
<div class="form-group">
    <label for="deskripsi" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="deskripsi" class="form-control"><?php echo set_value('deskripsi',isset($Mis_en_beaute->deskripsi) ? $Mis_en_beaute->deskripsi : ''); ?></textarea>
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
    <a href="<?php echo base_url() . 'admin/Mis_en_beaute'; ?>" class="btn btn-default">Annuler</a>
</div>
