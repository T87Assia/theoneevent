<div class="form-group">
    <label for="restauration_nom" class="control-label col-sm-3"> Pack </label>
    <div class="col-sm-6">
        <input type="text" name="restauration_nom" value="<?php echo set_value('restauration_nom',isset($restauration->restauration_nom) ? $restauration->restauration_nom : ''); ?>" class="form-control">
        <?php echo form_error('Nom du plat'); ?>
    </div>
</div>
<div class="form-group">
    <label for="restauration_prix" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="number" name="restauration_prix" value="<?php echo set_value('restauration_prix',isset($restauration->restauration_prix) ? $restauration->restauration_prix : ''); ?>" class="form-control">
        <?php echo form_error('Prix_du_plat'); ?>
    </div>
</div>
<div class="form-group">
    <label for="description" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-6">
        <textarea name="description" class="form-control"><?php echo set_value('description',isset($restauration->description) ? $restauration->description : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/restauration'; ?>" class="btn btn-default">Annuler</a>
</div>
