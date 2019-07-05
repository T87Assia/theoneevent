<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Confirmation de paiement :</h4>
    </div>
    <div class="panel-body">
			<?php if (isset($transaction)): ?>
				<h4>Confirmez le paiement de votre commande avec le code de la commande <a href="<?= base_url() . 'client/transaction/' . $transaction->id_reservation ?>" target="_blank">#<?= $transaction->id_reservation ?></a></h4>
				<hr>
				<div class="col-sm-12">
					<form class="form-horizontal" action="<?= base_url() . 'client/confirmation/store' ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="reservation_id" value="<?= $transaction->id_reservation; ?>">
						<div class="form-group">
								<label for="nom_banque" class="control-label col-sm-3"> Nom de la banque </label>
								<div class="col-sm-7">
										<input type="text" name="nom_banque" value="<?php echo set_value('nom_banque',isset($restauration->nom_banque) ? $restauration->nom_banque : ''); ?>" class="form-control" required>
										<?php echo form_error('nom_banque'); ?>
								</div>
						</div>
						<div class="form-group">
								<label for="n_compte" class="control-label col-sm-3"> Numéro du compte </label>
								<div class="col-sm-7">
										<input type="text" name="n_compte" value="<?php echo set_value('n_compte',isset($restauration->n_compte) ? $restauration->n_compte : ''); ?>" class="form-control" required>
										<?php echo form_error('n_compte'); ?>
								</div>
						</div>
						<div class="form-group">
								<label for="proprietaire" class="control-label col-sm-3"> Propriétaire </label>
								<div class="col-sm-7">
										<input type="text" name="proprietaire" value="<?php echo set_value('proprietaire',isset($restauration->proprietaire) ? $restauration->proprietaire : ''); ?>" class="form-control" required>
										<?php echo form_error('proprietaire'); ?>
								</div>
						</div>
						<div class="form-group">
								<label for="photo" class="control-label col-sm-3"> Preuve de paiement</label>
								<div class="col-sm-4">
										<input type="file" name="photo" required>
										<?php echo form_error('photo'); ?>
								</div>
						</div>
						<div style="width:100%;text-align:right;">
								<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-send"></span> Envoyer</button>
								<a href="<?php echo base_url() . 'admin/restauration'; ?>" class="btn btn-default">Annuler</a>
						</div>

					</form>
				</div>
			<?php endif; ?>
    </div>
    <div class="panel-footer">

    </div>
  </div>
</div>
