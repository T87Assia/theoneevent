<div class="form-group">
    <label for="dragee_nom" class="control-label col-sm-3"> Nom de Dragée </label>
    <div class="col-sm-6">
        <input type="text" name="dragee_nom" value="<?php echo set_value('dragee_nom',isset($dragee->dragee_nom) ? $dragee->dragee_nom : ''); ?>" class="form-control">
        <?php echo form_error('Mode_immortalisation'); ?>
    </div>
</div>
<div class="form-group">
    <label for="dragee_prix" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="dragee_prix" value="<?php echo set_value('dragee_prix',isset($dragee->dragee_prix) ? $dragee->dragee_prix : ''); ?>" class="form-control">
        <?php echo form_error('Prix_immortalisation'); ?>
    </div>
</div>
<div class="form-group">
    <label for="description" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="description" class="form-control"><?php echo set_value('description',isset($dragee->description) ? $dragee->description : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label for="photo" class="control-label col-sm-3"> Photo du Dragée </label>
    <div class="col-sm-4">
        <input type="file" name="photo" value="">
        <?php echo form_error('Photo'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/dragee'; ?>" class="btn btn-default">Annuler</a>
</div>
