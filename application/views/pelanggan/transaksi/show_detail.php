<div class="col-sm-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Votre commande :</h4>
    </div>
    <div class="panel-body">
      <center>
        <h3 class="page-header">Détails du location <br> <small>Numéro de la commande #<?= $detail->id_pemesanan ?></small></h3>
      </center>
      <div class="col-sm-6">
        <dl class="dl-horizontal">
          <dt>Nom</dt>
          <dd><?= $detail->nama; ?></dd>
          <dt>GSM</dt>
          <dd><?= $detail->no_telp; ?></dd>
          <dt>Adresse</dt>
          <dd><?= $detail->alamat; ?></dd>
          <dt>Date de l'événement</dt>
          <dd><?= nice_date($detail->tgl_acara,'d-m-Y'); ?></dd>
          <dt>Statut</dt>
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
              <td> Location du local</td>
              <td><?= $detail->nama_gedung ?></td>
              <td>Dh <?= number_format($detail->harga_gedung,0,',','.') ?></td>
            </tr>
            <tr>
              <td>2</td>
              <td> Décoration du local</td>
              <td><?= $detail->nama_dekorasi ?></td>
              <td>Dh <?= number_format($detail->harga_dekorasi,0,',','.') ?></td>
            </tr>
            <tr>
              <td>3</td>
              <td> Maquillage</td>
              <td><?= $detail->nama_rias ?></td>
              <td>Dh <?= number_format($detail->harga_rias,0,',','.') ?></td>
            </tr>
            <tr>
              <td>4</td>
              <td> Restauration</td>
              <td><?= $detail->nama_katering ?></td>
              <td>Dh <?= number_format($detail->harga_katering,0,',','.') ?></td>
            </tr>
            <tr>
              <td>5</td>
              <td> Immortalisation</td>
              <td><?= $detail->nama_dokumentasi ?></td>
              <td>Dh <?= number_format($detail->harga_dokumentasi,0,',','.') ?></td>
            </tr>
            <tr>
              <th colspan="3">Total</th>
              <?php
                $total = $detail->harga_gedung + $detail->harga_dekorasi + $detail->harga_katering + $detail->harga_rias + $detail->harga_dokumentasi;
              ?>
              <td>Dh <?= number_format($total,0,',','.') ?></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="panel-footer">

    </div>
  </div>
</div>
