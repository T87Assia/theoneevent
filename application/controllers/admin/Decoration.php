<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class decoration extends Admin_Controller {

    public function __construct()
    {
        parent::__construct();
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max-size'] = 10240;

        $this->load->library('upload',$config);
    }

    public function index()
    {
        $data['decorations'] = $this->db->get('decoration');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/decoration/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('decoration_nom','Nama decoration','required');
        $this->form_validation->set_rules('description','Description','required');
        $this->form_validation->set_rules('decoration_prix','Harga','required|numeric');
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
                'decoration_nom' => $this->input->post('decoration_nom'),
                'description' => $this->input->post('description'),
                'decoration_prix' => $this->input->post('decoration_prix')
            );

            // UPLOAD IMAGE
            $this->upload->do_upload('photo');
            $data['photo'] = $this->upload->data('file_name');

			// INSERT INTO DATABASE
            $this->db->insert('decoration',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données sauvegardées avec succès!');
            redirect(base_url() . 'admin/decoration/');
        }
    }

    public function edit($id)
    {
        if ($id == null) {
            redirect(base_url() . 'admin/decoration');
        }

        $result = $this->db->get_where('decoration',['decoration_id' => $id]);
        $data['decoration'] = $result->row();
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
                else {
                    $error = null;
                }
            }
			$this->template('edit',$error);
            return;
        } else {
            $data = array(
                'decoration_nom' => $this->input->post('decoration_nom'),
                'description' => $this->input->post('description'),
                'decoration_prix' => $this->input->post('decoration_prix')
            );

            if ($this->input->post('photo') != null) {
                // UPLOAD IMAGE
                $this->upload->do_upload('photo');
                $data['photo'] = $this->upload->data('file_name');
            }

            // INSERT INTO DATABASE
            $this->db->where('decoration_id',$id);
            $this->db->update('decoration',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données mises à jour avec succès!');
            redirect(base_url() . 'admin/decoration/');
        }
    }

    public function delete($id)
    {
        $data = $this->db->get_where('decoration',['decoration_id' => $id])->row();

        // DELETING IMAGE
        if ($data->photo != '') {
          unlink('uploads/' . $data->photo);
        }

        $this->db->delete('decoration',['decoration_id' => $id]);

        $this->session->set_flashdata('success','Données supprimées avec succès!');
        redirect(base_url() . 'admin/decoration/');
    }
}

/* End of file Controllername.php */
