<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title"><i class="fa fa-list-alt"></i> Devis :</h4>
    </div>
    <div class="panel-body">
      <center>
        <h3 class="page-header"><small>Numéro de la commande #<?= $detail->id_reservation ?></small></h3>
      </center>
      <div class="col-sm-12">
        <dl class="dl-horizontal">
          <dt>Nom</dt>
          <dd><?= $detail->nama; ?></dd>
          <dt>GSM</dt>
          <dd><?= $detail->tel; ?></dd>
          <dt>Adresse</dt>
          <dd><?= $detail->adresse; ?></dd>
          <dt>Date de l'événement</dt>
          <dd><?= nice_date($detail->jour,'d-m-Y'); ?></dd>
          <dt>Statut</dt>
          <dd><label class="label <?= ($detail->statut == "pending") ? 'label-default' : 'label-success' ?>"><?= $detail->statut ?></label></dd>
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
              <td> Salle de Fêtes</td>
              <td><?= $detail->salle_nom ?></td>
              <td><?= number_format($detail->salle_prix,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>2</td>
              <td> Décoration et Animation</td>
              <td><?= $detail->decoration_nom ?></td>
              <td><?= number_format($detail->decoration_prix,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>3</td>
              <td> Mise en beauté</td>
              <td><?= $detail->beaute_nom ?></td>
              <td><?= number_format($detail->beaute_prix,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>4</td>
              <td> Restauration</td>
              <td><?= $detail->restauration_nom ?></td>
              <td><?= number_format($detail->restauration_prix,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <td>5</td>
              <td> Dragée</td>
              <td><?= $detail->dragee_nom ?></td>
              <td><?= number_format($detail->dragee_prix,0,',','.') ?> Dh</td>
            </tr>
            <tr>
              <th colspan="3">Total</th>
              <?php
                $total = $detail->salle_prix + $detail->decoration_prix + $detail->restauration_prix + $detail->beaute_prix + $detail->dragee_prix;
              ?>
              <td><?= number_format($total,0,',','.') ?> Dh</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
