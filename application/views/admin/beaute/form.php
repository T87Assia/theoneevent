<div class="form-group">
    <label for="beaute_nom" class="control-label col-sm-3"> Nom Mise en beauté </label>
    <div class="col-sm-6">
        <input type="text" name="beaute_nom" value="<?php echo set_value('beaute_nom',isset($beaute->beaute_nom) ? $beaute->beaute_nom : ''); ?>" class="form-control">
        <?php echo form_error('Nom_beaute'); ?>
    </div>
</div>
<div class="form-group">
    <label for="beaute_prix" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="beaute_prix" value="<?php echo set_value('beaute_prix',isset($beaute->beaute_prix) ? $beaute->beaute_prix : ''); ?>" class="form-control">
        <?php echo form_error('Prix_beaute'); ?>
    </div>
</div>
<div class="form-group">
    <label for="description" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="description" class="form-control"><?php echo set_value('description',isset($beaute->description) ? $beaute->description : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label for="photo" class="control-label col-sm-3"> Photo </label>
    <div class="col-sm-4">
        <input type="file" name="photo">
        <?php echo form_error('Photo'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/beaute'; ?>" class="btn btn-default">Annuler</a>
</div>
