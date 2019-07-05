<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('user_model');
  }

  public function index()
  {
    $data['users'] = $this->user_model->getAll();
    $this->template('index',$data);
  }

  private function template($template,$data = null)
  {
    $this->load->view('templates/admin/header');
    $this->load->view('templates/admin/sidemenu');
    $this->load->view('admin/user/'.$template,$data);
    $this->load->view('templates/admin/footer');
  }

  private function validation() {
    $this->form_validation->set_rules('username','Username','required');
    $this->form_validation->set_rules('name','Nama','required');
    $this->form_validation->set_rules('tel','Numéro de téléphone','required|numeric|max_length[12]');
    $this->form_validation->set_rules('password','Password','required');
  }

  public function create()
  {
    $this->template('create');
  }

  public function store()
  {
    $this->validation();

    if ($this->form_validation->run() == FALSE) {
      $this->template('create');
      return;
    } else {
      // INSERT INTO DATABASE
      $this->user_model->insert();

      // REDIRECT TO USER PAGE
      $this->session->set_flashdata('success','Données sauvegardées avec succès!');
      redirect(base_url() . 'admin/user/');
    }
  }

  public function edit($id)
  {
    if ($id == null) {
      redirect(base_url() . 'admin/user');
    }

    $data['user'] = $this->user_model->get_where(['user_id' => $id]);
    $this->template('edit',$data);
  }

  public function update($id)
  {
    $this->validation();

    if ($this->form_validation->run() == FALSE) {
      $data['user'] = $this->user_model->get_where(['user_id' => $id]);
      $this->template('edit',$data);
      return;
    } else {
      // UPDATE DATA
      $this->user_model->update($id);

      // REDIRECT TO USER PAGE
      $this->session->set_flashdata('success','Données mises à jour avec succès!');
      redirect(base_url() . 'admin/user/');
    }
  }

  public function delete($id)
  {
    $this->db->where('user_id',$id);
    $this->db->delete('users');

    $this->session->set_flashdata('success','Données supprimées avec succès!');
    redirect(base_url() . 'admin/user/');
  }
}

/* End of file Controllername.php */
