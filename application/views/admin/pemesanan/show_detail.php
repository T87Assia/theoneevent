<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Votre commande :</h4>
    </div>
    <div class="panel-body">
      <center>
        <h3 class="page-header">Détails de la commande <br> <small>Numéro de la commande #<?= $detail->id_pemesanan ?></small></h3>
      </center>
      <div class="col-sm-6">
        <dl class="dl-horizontal">
          <dt>Nom</dt>
          <dd><?= $detail->nama; ?></dd>
          <dt>GSM</dt>
          <dd><?= $detail->no_telp; ?></dd>
          <dt>Adresse</dt>
          <dd><?= $detail->alamat; ?></dd>
          <dt>Date d'événement</dt>
          <dd><?= nice_date($detail->tgl_acara,'d-m-Y'); ?></dd>
          <dt>Status</dt>
          <dd><label class="label <?= ($detail->status == "pending") ? 'label-default' : 'label-success' ?>"><?= $detail->status ?></label></dd>
        </dl>
      </div>
      <div class="col-sm-12">
        <table class="table table-bordered table-condensed table-responsive">
          <thead>
            <tr>
              <th>#</th>
              <th>Type de commande</th>
              <th>Nom</th>
              <th>Prix</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td> local</td>
              <td><?= $detail->nama_gedung ?></td>
              <td><?= number_format($detail->harga_gedung,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>2</td>
              <td> Déco animation</td>
              <td><?= $detail->nama_Deco_et_Animation ?></td>
              <td><?= number_format($detail->harga_Deco_et_Animation,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>3</td>
              <td> Mise en beauté</td>
              <td><?= $detail->nama_Mis_en_beaute ?></td>
              <td><?= number_format($detail->harga_Mis_en_beaute,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>4</td>
              <td> Restauration</td>
              <td><?= $detail->nama_katering ?></td>
              <td><?= number_format($detail->harga_katering,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>5</td>
              <td> Photo video</td>
              <td><?= $detail->nama_Photo_video ?></td>
              <td><?= number_format($detail->harga_Photo_video,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <th colspan="3">Total</th>
              <?php
                $total = $detail->harga_gedung + $detail->harga_Deco_et_Animation + $detail->harga_katering + $detail->harga_Mis_en_beaute + $detail->harga_Photo_video;
              ?>
              <td><?= number_format($total,0,',','.') ?> Dh</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel-footer">
      <?php if ($detail->status == 'pending'): ?>
        <form class="" action="<?= base_url() . 'admin/pemesanan/update/'. $detail->id_pemesanan ?>" method="post">
          <button type="submit" class="btn btn-success">Commande actif</button>
        </form>
      <?php endif; ?>
    </div>
  </div>
</div>
