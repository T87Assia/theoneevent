<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registre extends CI_Controller {

    private function validation() {
        $this->form_validation->set_rules('nama','Nom du Client','required');
        $this->form_validation->set_rules('tel','Numéro de téléphone','required|numeric|is_unique[client.tel]');
        $this->form_validation->set_rules('adresse','Adresse','required');
		$this->form_validation->set_rules('email','Email','required|is_unique[client.email]');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirmer le mot de passe', 'trim|required|matches[password]');
    }

    public function store()
    {
        $this->validation();           

        if ($this->form_validation->run() == FALSE) {
            $error = $this->form_validation->error_array();
            $this->session->set_flashdata($error);
            redirect(base_url() . '#registre');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tel' => $this->input->post('tel'),
                'adresse' => $this->input->post('adresse'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
            );

            // INSERT INTO DATABASE
            $this->db->insert('client',$data);

            $getData = $this->db->get_where('client',['email' => $this->input->post('email')])->row();

            // set session for loggin automatically
            $session = [
				'user_id' => $getData->client_id,
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password'),
                'role' => 'guest',
                'validate' => true
            ];
            $this->session->set_userdata($session);

            // redirect to dashboard
            redirect(base_url() . 'dashboard');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(['email','password','nama','role','validate']);
        redirect(base_url());
    }
}

/* End of file Controllername.php */
