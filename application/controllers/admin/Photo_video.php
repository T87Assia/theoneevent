<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_video extends Admin_Controller {

    public function index()
    {
        $data['dok'] = $this->db->get('Photo_video');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/Photo_video/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama_Photo_video','Nama Photo_video','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        $this->form_validation->set_rules('harga_Photo_video','Harga','required|numeric');
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
                'nama_Photo_video' => $this->input->post('nama_Photo_video'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_Photo_video' => $this->input->post('harga_Photo_video')
            );

            // INSERT INTO DATABASE
            $this->db->insert('Photo_video',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données sauvegardées avec succès!');
            redirect(base_url() . 'admin/Photo_video/');
        }
    }

    public function edit($id)
    {
        // jika id tidak ada maka halaman akan dialihkan
        if ($id == null) {
            redirect(base_url() . 'admin/Photo_video');
        }

        // mengambil data dari table user berdasarkan id
        $result = $this->db->get_where('Photo_video',['Photo_video_id' => $id]);
        $data['Photo_video'] = $result->row();
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
                'nama_Photo_video' => $this->input->post('nama_Photo_video'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_Photo_video' => $this->input->post('harga_Photo_video')
            );

            // INSERT INTO DATABASE
            $this->db->where('Photo_video_id',$id);
            $this->db->update('Photo_video',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Données mises à jour avec succès!');
            redirect(base_url() . 'admin/Photo_video/');
        }
    }

    public function delete($id)
    {
        $this->db->where('Photo_video_id',$id);
        $this->db->delete('Photo_video');

        $this->session->set_flashdata('success','Données supprimées avec succès!');
        redirect(base_url() . 'admin/Photo_video/');
    }
}

/* End of file Controllername.php */
