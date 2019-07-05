<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation extends Admin_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('ConfirmationModel');
    }

    public function index()
    {
        $data['transactions'] = $this->ConfirmationModel->getConfirmation();

        // var_dump($data);

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/admin/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

}

/* End of file Controllername.php */
