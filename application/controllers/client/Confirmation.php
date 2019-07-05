<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Confirmation extends My_Controller {

    public function __construct()
    {
      parent::__construct();
      $config['upload_path'] = './uploads/';
      $config['allowed_types'] = 'jpg|png|jpeg';
      $config['max-size'] = 10240;

      $this->load->library('upload',$config);
      $this->load->model('ConfirmationModel');
      $this->load->model('TransactionModel');
    }

    public function index()
    {
      $data['transaction'] = $this->TransactionModel->myTransaction();
      $this->template('index',$data);
    }

    public function template($page, $data = null)
    {
      $this->load->view('templates/client/header');
      $this->load->view('templates/client/sidemenu');
      $this->load->view('client/confirmation/'.$page,$data);
      $this->load->view('templates/client/footer');
    }

    public function store()
    {
        if (!$this->upload->do_upload('photo')) {
            $error = array('error' => $this->upload->display_errors());
            $this->template('index',$error);
            return;
        }

        $data = array(
            'client_id' => $this->session->userdata('user_id'),
            'reservation_id' => $this->input->post('reservation_id'),
            'nom_banque' => $this->input->post('nom_banque'),
            'n_compte' => $this->input->post('n_compte'),
            'proprietaire' => $this->input->post('proprietaire')
        );

        // UPLOAD IMAGE
        $this->upload->do_upload('photo');
        $data['photo'] = $this->upload->data('file_name');

        // var_dump($data);

        // INSERT INTO DATABASE
        $this->db->insert('confirmation',$data);

        // REDIRECT TO USER PAGE
        $this->session->set_flashdata('success','Confirmation effectuée avec succès!');
        redirect(base_url() . 'dashboard/');
    }

}

/* End of file Controllername.php */
