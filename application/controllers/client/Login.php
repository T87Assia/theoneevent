<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('validate') != null) {
            redirect(base_url() . 'dashboard');
        }
    }

    public function index()
    {
        $this->load->view('login');
    }

    public function check()
    {
        $username = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->db->get_where('client',[
            'email' => $username,
            'password' => md5($password)
        ]);

        $result = $data->row();

        if ($result == null) {
            $this->session->set_flashdata([
                'email' => $username,
                'errors' => 'Désolé, le nom d\'utilisateur ou le mot de passe ne convient pas. Veuillez réessayer.'
            ]);
            redirect(base_url() . 'login');
        }
        else {
            $this->session->set_userdata([
                'user_id' => $result->client_id,
                'email' => $username,
                'nama' => $result->nama,
                'role' => 'guest',
                'password' => $result->password,
                'validate' => true
            ]);
            redirect(base_url() . 'dashboard');
        }
    }

}

/* End of file Controllername.php */
