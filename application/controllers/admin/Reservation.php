<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends Admin_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('TransactionModel');
    }

    public function index()
    {
        $data['transactions'] = $this->TransactionModel->getTransaction();

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/reservation/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    public function update($id)
    {
      $this->db->where('id_reservation',$id);
      $this->db->update('reservation',['statut' => 'active']);

      redirect(base_url() . 'admin/reservation/');
    }

    public function show($id)
    {
      $data['detail'] = $this->TransactionModel->getDataById($id);

      $this->template('show_detail',$data);
    }

}

/* End of file Controllername.php */
