<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

    private function validation() {
        $this->form_validation->set_rules('nama','Nama Pelanggan','required');
        $this->form_validation->set_rules('no_telp','No Telp','required|numeric|is_unique[pelanggan.no_telp]');
        $this->form_validation->set_rules('alamat','Alamat','required');
		$this->form_validation->set_rules('email','Email','required|is_unique[pelanggan.email]');
		$this->form_validation->set_rules('password', 'Mot de passe', 'trim|required');
		$this->form_validation->set_rules('confirm_password', 'Confirmer le mot de passe', 'trim|required|matches[password]');
    }

    public function store()
    {
        $this->validation();           

        if ($this->form_validation->run() == FALSE) {
            $error = $this->form_validation->error_array();
            $this->session->set_flashdata($error);
            redirect(base_url() . '#daftar');
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'no_telp' => $this->input->post('no_telp'),
                'alamat' => $this->input->post('alamat'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
            );

            // INSERT INTO DATABASE
            $this->db->insert('pelanggan',$data);

            $getData = $this->db->get_where('pelanggan',['email' => $this->input->post('email')])->row();

            // set session for loggin automatically
            $session = [
				'user_id' => $getData->pelanggan_id,
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
