<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfirmationModel extends CI_Model {

  public function getConfirmation()
  {
    $this->db->select('*');
    $this->db->from('confirmation');
    $this->db->join('client','client.client_id = confirmation.client_id','left');
    $this->db->join('reservation','reservation.id_reservation = confirmation.reservation_id','left');
    $query = $this->db->get();
    return $query->result();
  }

}

/* End of file ModelName.php */
