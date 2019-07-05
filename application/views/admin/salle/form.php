<div class="form-group">
    <label for="description" class="control-label col-sm-3"> Noms du local </label>
    <div class="col-sm-6">
        <input type="text" name="salle_nom" value="<?php echo set_value('salle_nom',isset($salle->salle_nom) ? $salle->salle_nom : ''); ?>" class="form-control">
        <?php echo form_error('Noms_local'); ?>
    </div>
</div>
<div class="form-group">
    <label for="salle_prix" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="salle_prix" value="<?php echo set_value('salle_prix',isset($salle->salle_prix) ? $salle->salle_prix : ''); ?>" class="form-control">
        <?php echo form_error('Prix_local'); ?>
    </div>
</div>
<hr>
<div class="form-group">
    <label for="description" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="description" class="form-control"><?php echo set_value('description',isset($salle->description) ? $salle->description : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label for="photo" class="control-label col-sm-3"> Photos du local </label>
    <div class="col-sm-4">
        <input type="file" name="photo">
        <?php echo form_error('Photo'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/salle'; ?>" class="btn btn-default">Annuler</a>
</div>
