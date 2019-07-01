<div class="form-group">
    <label for="username" class="control-label col-sm-3"> Nom </label>
    <div class="col-sm-6">
        <input type="text" name="name" value="<?php echo set_value('name',isset($user->name) ? $user->name : ''); ?>" class="form-control">
        <?php echo form_error('Nom'); ?>
    </div>
</div>
<div class="form-group">
    <label for="username" class="control-label col-sm-3"> GSM </label>
    <div class="col-sm-4">
        <input type="text" name="no_telp" value="<?php echo set_value('no_telp',isset($user->no_telp) ? $user->no_telp : ''); ?>" class="form-control">
        <?php echo form_error('GSM'); ?>
    </div>
</div>
<hr>
<div class="form-group">
    <label for="username" class="control-label col-sm-3"> Nom d'utilisateur </label>
    <div class="col-sm-4">
        <input type="username" name="username" value="<?php echo set_value('username',isset($user->username) ? $user->username : ''); ?>" class="form-control">
        <?php echo form_error('Nom utilisateur); ?>
    </div>
</div>
<div class="form-group">
    <label for="username" class="control-label col-sm-3"> Mot de passe </label>
    <div class="col-sm-4">
        <input type="password" name="password" class="form-control">
        <?php echo form_error('password'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/user'; ?>" class="btn btn-default">Annuler</a>
</div>