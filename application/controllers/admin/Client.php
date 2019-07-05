<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends Admin_Controller {

    public function index()
    {
        $data['clients'] = $this->db->get('client');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/client/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama','Nama Client','required');
        $this->form_validation->set_rules('tel','Numéro de téléphone ','required');
        $this->form_validation->set_rules('adresse','Adresse','required');
        $this->form_validation->set_rules('email','Email','required');
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
            $data = array(
                'nama' => $this->input->post('nama'),
                'tel' => $this->input->post('tel'),
                'adresse' => $this->input->post('adresse'),
                'email' => $this->input->post('email')
            );

            // INSERT INTO DATABASE
            $this->db->insert('client',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données sauvegardées avec succès!');
            redirect(base_url() . 'admin/client/');
        }
    }

    public function edit($id)
    {
        if ($id == null) {
            redirect(base_url() . 'admin/client');
        }

        $result = $this->db->get_where('client',['client_id' => $id]);
        $data['client'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            $this->template('edit');
            return;
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'tel' => $this->input->post('tel'),
                'adresse' => $this->input->post('adresse'),
                'email' => $this->input->post('email')
            );

            // INSERT INTO DATABASE
            $this->db->where('client_id',$id);
            $this->db->update('client',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données mises à jour avec succès!');
            redirect(base_url() . 'admin/client/');
        }
    }

    public function delete($id)
    {
        $this->db->where('client_id',$id);
        $this->db->delete('client');

        $this->session->set_flashdata('success','Données supprimées avec succès!');
        redirect(base_url() . 'admin/client/');
    }
}

/* End of file Controllername.php */
