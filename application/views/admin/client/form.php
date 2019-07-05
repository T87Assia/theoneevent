<div class="form-group">
    <label for="nama" class="control-label col-sm-3"> Nom </label>
    <div class="col-sm-6">
        <input type="text" name="nama" value="<?php echo set_value('nama',isset($client->nama) ? $client->nama : ''); ?>" class="form-control">
        <?php echo form_error('Nom'); ?>
    </div>
</div>
<div class="form-group">
    <label for="tel" class="control-label col-sm-3"> GSM </label>
    <div class="col-sm-4">
        <input type="text" name="tel" value="<?php echo set_value('tel',isset($client->tel) ? $client->tel : ''); ?>" class="form-control">
        <?php echo form_error('GSM'); ?>
    </div>
</div>
<div class="form-group">
    <label for="email" class="control-label col-sm-3"> Email </label>
    <div class="col-sm-4">
        <input type="email" name="email" value="<?php echo set_value('email',isset($client->email) ? $client->email : ''); ?>" class="form-control">
        <?php echo form_error('Email'); ?>
    </div>
</div>
<div class="form-group">
    <label for="adresse" class="control-label col-sm-3"> Adresse </label>
    <div class="col-sm-4">
        <textarea name="adresse" class="form-control"><?php echo set_value('adresse',isset($client->adresse) ? $client->adresse : ''); ?></textarea>
        <?php echo form_error('Adresse'); ?>
    </div>
</div>
<div style="width:100%;text-align:right;">
    <button class="btn btn-success" type="submit">Enregistrer</button>
    <a href="<?php echo base_url() . 'admin/client'; ?>" class="btn btn-default">Annuler</a>
</div>