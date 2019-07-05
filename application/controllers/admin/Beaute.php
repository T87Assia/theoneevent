<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beaute extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png';
        $config['max-size'] = 10240;

        $this->load->library('upload',$config);
    }

    public function index()
    {
        $data['beautees'] = $this->db->get('beaute');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/beaute/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('beaute_nom','Nom du beaute','required');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('beaute_prix','Prix','required|numeric');
    }

    public function create()
    {
        $this->template('create');
    }

    public function store()
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if (!$this->upload->do_upload('photo')) {
                $error = array('error' => $this->upload->display_errors());
            }
            else {
                $error = null;
            }
            $this->template('create',$error);
            return;
        } else {
            $data = array(
                'beaute_nom' => $this->input->post('beaute_nom'),
                'description' => $this->input->post('description'),
                'beaute_prix' => $this->input->post('beaute_prix')
            );

            // UPLOAD IMAGE
            $this->upload->do_upload('photo');
            $data['photo'] = $this->upload->data('file_name');

            // INSERT INTO DATABASE
            $this->db->insert('beaute',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données sauvegardées avec succès!');
            redirect(base_url() . 'admin/beaute/');
        }
    }

    public function edit($id)
    {
        if ($id == null) {
            redirect(base_url() . 'admin/beaute');
        }

        $result = $this->db->get_where('beaute',['beaute_id' => $id]);
        $data['beaute'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post('photo') != null) {
                if (!$this->upload->do_upload('photo')) {
                    $error = array('error' => $this->upload->display_errors());
                }
            }
            $this->template('edit',$error);
            return;
        } else {
            $data = array(
                'beaute_nom' => $this->input->post('beaute_nom'),
                'description' => $this->input->post('description'),
                'beaute_prix' => $this->input->post('beaute_prix')
            );

            if ($this->input->post('photo') != null) {
                // UPLOAD IMAGE
                $this->upload->do_upload('photo');
                $data['photo'] = $this->upload->data('file_name');
            }

            // INSERT INTO DATABASE
            $this->db->where('beaute_id',$id);
            $this->db->update('beaute',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données mises à jour avec succès!');
            redirect(base_url() . 'admin/beaute/');
        }
    }

    public function delete($id)
    {
        $data = $this->db->get_where('beaute',['beaute_id' => $id])->row();

        // DELETING IMAGE
        unlink('uploads/' . $data->photo);

        $this->db->delete('beaute',['beaute_id' => $id]);

        $this->session->set_flashdata('success','Données supprimées avec succès!');
        redirect(base_url() . 'admin/beaute/');
    }
}

/* End of file Controllername.php */
