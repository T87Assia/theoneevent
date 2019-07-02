<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Deco_et_Animation extends Admin_Controller {

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
        $data['dekor'] = $this->db->get('decoration');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/Deco_et_Animation/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama_Deco_et_Animation','Nama Deco_et_Animation','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        $this->form_validation->set_rules('harga_Deco_et_Animation','Harga','required|numeric');
    }

    public function create()
    {
        $this->template('create');
    }

    public function store()
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if (!$this->upload->do_upload('foto')) {
                $error = array('error' => $this->upload->display_errors());
            }
            else {
                $error = null;
            }
            $this->template('create',$error);
            return;
        } else {
            $data = array(
                'nama_Deco_et_Animation' => $this->input->post('nama_Deco_et_Animation'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_Deco_et_Animation' => $this->input->post('harga_Deco_et_Animation')
            );

            // UPLOAD IMAGE
            $this->upload->do_upload('foto');
            $data['foto'] = $this->upload->data('file_name');

            // INSERT INTO DATABASE
            $this->db->insert('decoration',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données sauvegardées avec succès!');
            redirect(base_url() . 'admin/Deco_et_Animation/');
        }
    }

    public function edit($id)
    {
        // jika id tidak ada maka halaman akan dialihkan
        if ($id == null) {
            redirect(base_url() . 'admin/Deco_et_Animation');
        }

        // mengambil data dari table user berdasarkan id
        $result = $this->db->get_where('decoration',['Deco_et_Animation_id' => $id]);
        $data['Deco_et_Animation'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post('foto') != null) {
                if (!$this->upload->do_upload('foto')) {
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
                'nama_Deco_et_Animation' => $this->input->post('nama_Deco_et_Animation'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_Deco_et_Animation' => $this->input->post('harga_Deco_et_Animation')
            );

            if ($this->input->post('foto') != null) {
                // UPLOAD IMAGE
                $this->upload->do_upload('foto');
                $data['foto'] = $this->upload->data('file_name');
            }

            // INSERT INTO DATABASE
            $this->db->where('Deco_et_Animation_id',$id);
            $this->db->update('decoration',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données mises à jour avec succès!');
            redirect(base_url() . 'admin/Deco_et_Animation/');
        }
    }

    public function delete($id)
    {
        $data = $this->db->get_where('decoration',['Deco_et_Animation_id' => $id])->row();

        // DELETING IMAGE
        if ($data->foto != '') {
          unlink('uploads/' . $data->foto);
        }

        $this->db->delete('decoration',['Deco_et_Animation_id' => $id]);

        $this->session->set_flashdata('success','Données supprimées avec succès!');
        redirect(base_url() . 'admin/Deco_et_Animation/');
    }
}

/* End of file Controllername.php */
