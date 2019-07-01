<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Confirmation de paiement :</h4>
    </div>
    <div class="panel-body">
			<?php if (isset($transaksi)): ?>
				<h4>Confirmez le paiement de votre commande avec le code de la commande <a href="<?= base_url() . 'lihat/transaksi/' . $transaksi->id_pemesanan ?>" target="_blank">#<?= $transaksi->id_pemesanan ?></a></h4>
				<hr>
				<div class="col-sm-12">
					<form class="form-horizontal" action="<?= base_url() . 'pelanggan/konfirmasi/store' ?>" method="post" enctype="multipart/form-data">
						<input type="hidden" name="pemesanan_id" value="<?= $transaksi->id_pemesanan; ?>">
						<div class="form-group">
								<label for="nama_bank" class="control-label col-sm-3"> Nom de la banque </label>
								<div class="col-sm-7">
										<input type="text" name="nama_bank" value="<?php echo set_value('nama_bank',isset($katering->nama_bank) ? $katering->nama_bank : ''); ?>" class="form-control" required>
										<?php echo form_error('nama_bank'); ?>
								</div>
						</div>
						<div class="form-group">
								<label for="no_rek" class="control-label col-sm-3"> Numéro du compte </label>
								<div class="col-sm-7">
										<input type="text" name="no_rek" value="<?php echo set_value('no_rek',isset($katering->no_rek) ? $katering->no_rek : ''); ?>" class="form-control" required>
										<?php echo form_error('no_rek'); ?>
								</div>
						</div>
						<div class="form-group">
								<label for="pemilik" class="control-label col-sm-3"> Propriétaire </label>
								<div class="col-sm-7">
										<input type="text" name="pemilik" value="<?php echo set_value('pemilik',isset($katering->pemilik) ? $katering->pemilik : ''); ?>" class="form-control" required>
										<?php echo form_error('pemilik'); ?>
								</div>
						</div>
						<div class="form-group">
								<label for="foto" class="control-label col-sm-3"> Preuve de paiement</label>
								<div class="col-sm-4">
										<input type="file" name="foto" required>
										<?php echo form_error('foto'); ?>
								</div>
						</div>
						<div style="width:100%;text-align:right;">
								<button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-send"></span> Envoyer</button>
								<a href="<?php echo base_url() . 'admin/katering'; ?>" class="btn btn-default">Annuler</a>
						</div>

					</form>
				</div>
			<?php endif; ?>
    </div>
    <div class="panel-footer">

    </div>
  </div>
</div>
