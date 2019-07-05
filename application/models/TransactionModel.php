<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransactionModel extends CI_Model {

  public function getTransaction()
  {
    $this->db->select('*');
    $this->db->from('reservation');
    $this->db->join('client','client.client_id = reservation.user_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function myTransaction()
  {
    $this->db->where('user_id',$this->session->userdata('user_id'));
		return $this->db->get('reservation')->row();
  }

	public function myTransactions()
  {
    $this->db->where('user_id',$this->session->userdata('user_id'));
		return $this->db->get('reservation')->result();
  }

  public function simpanTransaction($data)
  {
    $this->db->insert('reservation',$data);
  }

  public function simpanDetailTransaction($id_transaction,$data)
  {
    if ($data['salle'] != null) {
      $data_salle = [
        'reservation_id' => $id_transaction,
        'salle_id' => $data['salle']
      ];
      $this->db->insert('reservation_salle',$data_salle);
    }

    if ($data['beaute'] != null) {
      $data_beaute = [
        'reservation_id' => $id_transaction,
        'beaute_id' => $data['beaute']
      ];
      $this->db->insert('reservation_beaute',$data_beaute);
    }

    if ($data['restauration'] != null) {
      $data_restauration = [
        'reservation_id' => $id_transaction,
        'restauration_id' => $data['restauration']
      ];
      $this->db->insert('reservation_restauration',$data_restauration);
    }

    if ($data['decoration'] != null) {
      $data_decoration = [
        'reservation_id' => $id_transaction,
        'decoration_id' => $data['decoration']
      ];
      $this->db->insert('reservation_decoration',$data_decoration);
    }

    if ($data['dragee'] != null) {
      $data_dragee = [
        'reservation_id' => $id_transaction,
        'dragee_id' => $data['dragee']
      ];
      $this->db->insert('reservation_dragee',$data_dragee);
    }
  }

  public function getDataById($id)
  {
    $this->db->select('*');
    $this->db->from('reservation');
    $this->db->where('id_reservation',$id);
    $this->db->join('client','client_id = reservation.user_id','left');
    $this->db->join('reservation_decoration','reservation_decoration.reservation_id = reservation.id_reservation','left');
    $this->db->join('reservation_beaute','reservation_beaute.reservation_id = reservation.id_reservation','left');
    $this->db->join('reservation_dragee','reservation_dragee.reservation_id = reservation.id_reservation','left');
    $this->db->join('reservation_salle','reservation_salle.reservation_id = reservation.id_reservation','left');
    $this->db->join('reservation_restauration','reservation_restauration.reservation_id = reservation.id_reservation','left');
    $this->db->join('salle','salle.salle_id = reservation_salle.salle_id','left');
    $this->db->join('decoration','decoration.decoration_id = reservation_decoration.decoration_id','left');
    $this->db->join('beaute','beaute.beaute_id = reservation_beaute.beaute_id','left');
    $this->db->join('restauration','restauration.restauration_id = reservation_restauration.restauration_id','left');
    $this->db->join('dragee','dragee.dragee_id = reservation_dragee.dragee_id','left');
    $query = $this->db->get();

    return $query->row();
  }

}

/* End of file ModelName.php */
