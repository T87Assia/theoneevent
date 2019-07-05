<div class="form-group">
    <label for="decoration_nom" class="control-label col-sm-3"> Nom de la déco animation </label>
    <div class="col-sm-6">
        <input type="text" name="decoration_nom" value="<?php echo set_value('decoration_nom',isset($decoration->decoration_nom) ? $decoration->decoration_nom : ''); ?>" class="form-control">
        <?php echo form_error('Nom_de_la_décoration'); ?>
    </div>
</div>
<div class="form-group">
    <label for="decoration_prix" class="control-label col-sm-3"> Prix </label>
    <div class="col-sm-4">
        <input type="text" name="decoration_prix" value="<?php echo set_value('decoration_prix',isset($decoration->decoration_prix) ? $decoration->decoration_prix : ''); ?>" class="form-control">
        <?php echo form_error('Prix_decoration'); ?>
    </div>
</div>
<div class="form-group">
    <label for="description" class="control-label col-sm-3"> Description </label>
    <div class="col-sm-4">
        <textarea name="description" class="form-control"><?php echo set_value('description',isset($decoration->description) ? $decoration->description : ''); ?></textarea>
        <?php echo form_error('Description'); ?>
    </div>
</div>
<div class="form-group">
    <label for="photo" class="control-label col-sm-3"> Photo du Décoration et Animation </label>
    <div class="col-sm-4">
        <input type="file" name="photo" value="">
        <?php echo form_error('Photo'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/decoration'; ?>" class="btn btn-default">Annuler</a>
</div>
