<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends My_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('TransactionModel');
    $this->load->model('DashboardModel');
  }

  public function index()
  {
    $data['transaction'] = $this->TransactionModel->myTransactions();

    $this->load->view('templates/client/header');
    $this->load->view('templates/client/sidemenu');
    $this->load->view('client/dashboard',$data);
    $this->load->view('templates/client/footer');
  }

}

/* End of file Controllername.php */
