<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Restauration extends Admin_Controller {

    public function index()
    {
        $data['caterings'] = $this->db->get('restauration');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/restauration/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('restauration_nom','Nom du restauration','required');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('restauration_prix','Prix','required|numeric');
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
                'restauration_nom' => $this->input->post('restauration_nom'),
                'description' => $this->input->post('description'),
                'restauration_prix' => $this->input->post('restauration_prix')
            );

            // INSERT INTO DATABASE
            $this->db->insert('restauration',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données sauvegardées avec succès!');
            redirect(base_url() . 'admin/restauration/');
        }
    }

    public function edit($id)
    {
        if ($id == null) {
            redirect(base_url() . 'admin/restauration');
        }

        $result = $this->db->get_where('restauration',['restauration_id' => $id]);
		$data['restauration'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
			$this->template('edit',$data);
			return;
        } else {
            $data = array(
                'restauration_nom' => $this->input->post('restauration_nom'),
                'description' => $this->input->post('description'),
                'restauration_prix' => $this->input->post('restauration_prix')
            );

            // INSERT INTO DATABASE
            $this->db->where('restauration_id',$id);
            $this->db->update('restauration',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données mises à jour avec succès!');
            redirect(base_url() . 'admin/restauration/');
        }
    }

    public function delete($id)
    {
        $this->db->where('restauration_id',$id);
        $this->db->delete('restauration');

        $this->session->set_flashdata('success','Données supprimées avec succès!');
        redirect(base_url() . 'admin/restauration/');
    }
}

/* End of file Controllername.php */
