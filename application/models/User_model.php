<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
  public $name;
  public $tel;
  public $password;
  public $username;

  public function getAll()
  {
    $query = $this->db->get('users');
    return $query->result();
  }

  public function insert()
  {
    $this->name = $this->input->post('name');
    $this->tel = $this->input->post('tel');
    $this->password = md5($this->input->post('password'));
    $this->username = $this->input->post('username');

    $this->db->insert('users',$this);
  }

  public function get_where($data)
  {
    $query = $this->db->get_where('users',$data);
    return $query->row();
  }

  public function update($id)
  {
    $this->name = $this->input->post('name');
    $this->tel = $this->input->post('tel');
    $this->password = md5($this->input->post('password'));
    $this->username = $this->input->post('username');

    $this->db->where('user_id',$id);
    $this->db->update('users',$this);
  }
}

/* End of file ModelName.php */
