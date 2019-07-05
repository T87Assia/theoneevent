<?php $date = @$_REQUEST['date']; ?>
<div class="col-sm-9">
    <?php if(isset($_SESSION['success'])): ?>
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php echo $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title"><i class="fa fa-dashboard"></i> Tableau de bord</h4>
        </div>
        <div class="panel-body">
            <center><h2>Bienvenue, <?= $this->session->userdata('nama'); ?> !</h2></center>
            <div class="col-sm-12">
                <h4 class="page-header">Les informations de votre compte</h4>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    Votre nom d'utilisateur et mot de passe
                    </div>
                    <div class="panel-body">
                        <ul class="list-unstyled">
                            <li><strong>Nom d'utilisateur</strong> : <?= $this->session->userdata('email') ?></li>
                            <li><strong>Mot de passe</strong> : Utilisez votre mot de passe</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                          Vos commandes
                    </div>
                    <div class="panel-body">
                        <?php if (isset($transaction) and count($transaction) != null): ?>
                                Vous avez <?= count($transaction) ?> Ordre : <br>
                                <ul class="list-unstyled">
																	<?php foreach($transaction as $trans): ?>
  	                                <li><a href="<?= base_url() . 'client/transaction/' . $trans->id_reservation ?>" target="_blank" >Sur <?= nice_date($trans->jour,'d-m-Y') ?> <small><span class="glyphicon glyphicon-new-window"></span></small></a></li>
																	<?php endforeach; ?>
                                </ul>
                        <?php else: ?>
                              Vous n'avez pas de commande
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
              <h4 class="page-header">Sélectionnez une date</h4>
              <div class="row">
                <div class="col-sm-12">
                  <div class="panel panel-info">
                      <div class="panel-heading"><i class="fa fa-calendar"></i> Planifiez vos événements</div>
                      <div class="panel-body">
                          <form class="" action="<?= base_url() . 'dashboard?date=' . $date; ?>" method="get">
                            <div class="alert alert-warning">
                              <ul>
                                <li>Sélectionnez votre date d'événements sur le calendrier et cliquez sur le bouton d'affichage pour voir la disponibilité de nos services à cette date</li>
                                <li>Les réservations peuvent être faites au moins 10 jours à compter de la date de l'événement.</li>
                              </ul>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                  <input type="text" name="date" class="form-control" value="<?= isset($date) ? $date : '' ?>" placeholder="La date de votre événement">
                                  <div class="input-group-btn">
                                    <button type="submit" class="btn btn-info"><i class="fa fa-eye"></i> Voir</button>
                                  </div>
                                </div>
                            </div>
                          </form>

                          <?php if (isset($date) && $date != ''): ?>
                            <hr>
                            <!--Tab menu-->
                            <form action="<?= base_url() . 'client/transaction' ?>" method="post">
                              <input type="hidden" name="jour" value="<?= $_REQUEST['date'] ?>">
                              <div id="tab">
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs" role="tablist">
                                      <li role="presentation" class="active"><a href="#salle" aria-controls="salle" role="tab" data-toggle="tab"><i class="fa fa-building-o fa-fw"></i>  Salles des Fêtes</a></li>
                                      <li role="presentation"><a href="#decoration" aria-controls="decoration" role="tab" data-toggle="tab"><i class="fa fa-diamond fa-fw"></i>  Décorations et Animations</a></li>
                                      <li role="presentation"><a href="#beaute" aria-controls="beaute" role="tab" data-toggle="tab"><i class="fa fa-female fa-fw"></i>  Mise en beauté</a></li>
                                      <li role="presentation"><a href="#restauration" aria-controls="restauration" role="tab" data-toggle="tab"><i class="fa fa-cutlery fa-fw"></i>  Restaurations</a></li>
                                      <li role="presentation"><a href="#dragee" aria-controls="dragee" role="tab" data-toggle="tab"><i class="fa fa-gift fa-fw"></i>  Dragées</a></li>
                                  </ul>

                                  <!-- Tab panes -->
                                  <div class="tab-content">
                                    <!-- Salle -->
                                    <div role="tabpanel" class="tab-pane active" id="salle">
                                      <div class="row">
                                        <?php if (count($this->DashboardModel->dataSalle($date)) > 0): ?>
                                          <?php foreach ($this->DashboardModel->dataSalle($date) as $salle): ?>
                                            <div class="col-sm-4">
                                                <label class="option">
                                                    <div class="thumbnail">
                                                        <input type="radio" name="salle" value="<?= $salle->salle_id ?>">
                                                        <img src="<?= base_url() . 'uploads/' . $salle->photo; ?>" alt="" class="photo-salle">
                                                        <div class="caption">
                                                            <h4><?= $salle->salle_nom; ?></h4>
                                                            <p class="price"><?= number_format($salle->salle_prix,0,',','.'); ?> Dh</p>
                                                            <p class="adresse"><?= $salle->description; ?></p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                          <?php endforeach; ?>
                                        <?php else: ?>
                                          <h4><center>Désolé, il n'y a pas de Salle de Fête disponibles à cette date</center></h4>
                                        <?php endif; ?>
                                      </div>
                                    </div>
                                    <!-- End of Salle -->

                                    <!-- decoration -->
                                    <div role="tabpanel" class="tab-pane" id="decoration">
                                        <div class="row">
                                          <?php if (count($this->DashboardModel->datadecoration($date)) > 0 ): ?>
                                            <?php foreach ($this->DashboardModel->datadecoration($date) as $decoration): ?>
                                              <div class="col-sm-4">
                                                  <label class="option">
                                                      <div class="thumbnail">
                                                          <input type="radio" name="decoration" value="<?= $decoration->decoration_id ?>">
                                                          <img src="<?= base_url() . 'uploads/' . $decoration->photo; ?>" alt="" class="photo-salle">
                                                          <div class="caption">
                                                              <h4><?= $decoration->decoration_nom; ?></h4>
                                                              <p class="price"><?= number_format($decoration->decoration_prix,0,',','.'); ?> Dh</p>
                                                              <p class="adresse"><?= $decoration->description; ?></p>
                                                          </div>
                                                      </div>
                                                  </label>
                                              </div>
                                            <?php endforeach; ?>
                                          <?php else: ?>
                                            <h4><center>Désolé, aucune déco animation n'est disponible à cette date</center></h4>
                                          <?php endif; ?>
                                        </div>
                                    </div>
                                    <!-- End of decoration -->

                                    <!-- beaute -->
                                    <div role="tabpanel" class="tab-pane" id="beaute">
                                        <div class="row">
                                          <?php foreach ($this->db->get('beaute')->result() as $beaute): ?>
                                            <div class="col-sm-4">
                                                <label class="option">
                                                    <div class="thumbnail">
                                                        <input type="radio" name="beaute" value="<?= $beaute->beaute_id ?>">
                                                        <img src="<?= base_url() . 'uploads/' . $beaute->photo; ?>" alt="" class="photo-salle">
                                                        <div class="caption">
                                                            <h4><?= $beaute->beaute_nom; ?></h4>
                                                            <p class="price"><?= number_format($beaute->beaute_prix,0,',','.'); ?> Dh</p>
                                                            <p class="adresse"><?= $beaute->description; ?></p>
                                                        </div>
                                                    </div>
                                                </label>
                                            </div>
                                          <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <!-- End of beaute -->

                                    <!-- Restauration -->
                                    <div role="tabpanel" class="tab-pane" id="restauration">
                                      <div class="row">
                                        <?php foreach ($this->db->get('restauration')->result() as $restauration): ?>
                                          <div class="col-sm-4">
                                              <label class="option">
                                                  <div class="thumbnail">
                                                      <input type="radio" name="restauration" value="<?= $restauration->restauration_id ?>">
                                                      <!-- <img src="<?= base_url() . 'uploads/' . $restauration->photo; ?>" alt="" class="photo-salle"> -->
                                                      <div class="caption">
                                                          <h4><?= $restauration->restauration_nom; ?></h4>
                                                          <p class="price"><?= number_format($restauration->restauration_prix,0,',','.'); ?> Dh</p>
                                                          <p class="adresse"><?= $restauration->description; ?></p>
                                                      </div>
                                                  </div>
                                              </label>
                                          </div>
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                    <!-- End of Restauration -->

                                    <!-- dragee -->
                                    <div role="tabpanel" class="tab-pane" id="dragee">
                                      <div class="row">
                                        <?php foreach ($this->db->get('dragee')->result() as $dragee): ?>
                                          <div class="col-sm-4">
                                              <label class="option">
                                                  <div class="thumbnail">
                                                      <input type="radio" name="dragee" value="<?= $dragee->dragee_id ?>">
                                                      <!-- <img src="<?= base_url() . 'uploads/' . $dragee->photo; ?>" alt="" class="photo-salle"> -->
                                                      <div class="caption">
                                                          <h4><?= $dragee->dragee_nom; ?></h4>
                                                          <p class="price"><?= number_format($dragee->dragee_prix,0,',','.'); ?> Dh</p>
                                                          <p class="adresse"><?= $dragee->description; ?></p>
                                                      </div>
                                                  </div>
                                              </label>
                                          </div>
                                        <?php endforeach; ?>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <div class="alert alert-warning">
                              Revérifiez votre commande avant de continuer, si toute est correcte, cliquez sur Continuer pour passer au processus suivant
                              </div>
                              <button type="submit" class="btn btn-info pull-right">Continuer <i class="fa fa-chevron-right"></i></button>
                            </form>
                          <?php endif; ?>
                      </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</div>
