<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends My_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('TransactionModel');
    }

    public function index()
    {

    }

    public function template($page, $data)
    {
      $this->load->view('templates/client/header');
      $this->load->view('templates/client/sidemenu');
      $this->load->view('client/transaction/'.$page,$data);
      $this->load->view('templates/client/footer');
    }

    public function store()
    {

      $id_transaction = str_replace('-','',$this->input->post('jour')) . $this->session->userdata('user_id');

      $data = [
        'id_reservation' => $id_transaction,
        'user_id' => $this->session->user_id,
        'jour' => $this->input->post('jour'),
        'statut' => 'pending'
      ];

      // Input transaction
      $this->TransactionModel->simpanTransaction($data);

      // Input data transaction
      $data_transaction = [
        'salle' => $this->input->post('salle'),
        'beaute' => $this->input->post('beaute'),
        'restauration' => $this->input->post('restauration'),
        'decoration' => $this->input->post('decoration'),
        'dragee' => $this->input->post('dragee')
      ];

      $this->TransactionModel->simpanDetailTransaction($id_transaction,$data_transaction);

      redirect(base_url() . 'client/transaction/'.$id_transaction);
    }

    public function show($id)
    {
      // echo $id;
			$data['detail'] = $this->TransactionModel->getDataById($id);

      $this->template('show_detail',$data);
    }

}

/* End of file Controllername.php */
