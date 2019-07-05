<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardModel extends CI_Model {

  public function dataSalle($tanggal)
  {
    $query = $this->db->select('*, salle.salle_id')
                      ->from('salle')
                      ->join('reservation_salle','reservation_salle.salle_id = salle.salle_id','left')
                      ->join('reservation','reservation.id_reservation = reservation_salle.reservation_id','left')
                      ->where('jour !=',$tanggal)
                      ->or_where('jour',null)
                      ->get();

    return $query->result();
  }

  public function datadecoration($tanggal)
  {
    $query = $this->db->select('*, decoration.decoration_id')
                      ->from('decoration')
                      ->join('reservation_decoration','reservation_decoration.decoration_id = decoration.decoration_id','left')
                      ->join('reservation','reservation.id_reservation = reservation_decoration.reservation_id','left')
                      ->where('jour',null)
                      ->or_where('jour !=',$tanggal)
                      ->get();

    return $query->result();
  }

}

/* End of file ModelName.php */
