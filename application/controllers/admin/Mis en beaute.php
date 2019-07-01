<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mis_en_beaute extends Admin_Controller {

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
        $data['Mis_en_beautees'] = $this->db->get('Mis_en_beaute');

        $this->template('index',$data);
    }

    private function template($template,$data = null)
    {
        $this->load->view('templates/admin/header');
        $this->load->view('templates/admin/sidemenu');
        $this->load->view('admin/Mis_en_beaute/'.$template,$data);
        $this->load->view('templates/admin/footer');
    }

    private function validation() {
        $this->form_validation->set_rules('nama_Mis_en_beaute','nama_Mis_en_beaute Mis_en_beaute','required');
        $this->form_validation->set_rules('deskripsi','Deskripsi','required');
        $this->form_validation->set_rules('harga_Mis_en_beaute','Harga','required|numeric');
    }

    public function create()
    {
        $this->template('create');
    }

    public function store()
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
            }
            else {
                $error = null;
            }
            $this->template('create',$error);
            return;
        } else {
            $data = array(
                'nama_Mis_en_beaute' => $this->input->post('nama_Mis_en_beaute'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_Mis_en_beaute' => $this->input->post('harga_Mis_en_beaute')
            );

            // UPLOAD IMAGE
            $this->upload->do_upload('gambar');
            $data['gambar'] = $this->upload->data('file_name');

            // INSERT INTO DATABASE
            $this->db->insert('maquiallage',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil disimpan!');
            redirect(base_url() . 'admin/Mis_en_beaute/');
        }
    }

    public function edit($id)
    {
        // jika id tidak ada maka halaman akan dialihkan
        if ($id == null) {
            redirect(base_url() . 'admin/Mis_en_beaute');
        }

        // mengambil data dari table user berdasarkan id
        $result = $this->db->get_where('Mis_en_beaute',['Mis_en_beaute_id' => $id]);
        $data['Mis_en_beaute'] = $result->row();
        $this->template('edit',$data);
    }

    public function update($id)
    {
        $this->validation();

        if ($this->form_validation->run() == FALSE) {
            if ($this->input->post('gambar') != null) {
                if (!$this->upload->do_upload('gambar')) {
                    $error = array('error' => $this->upload->display_errors());
                }
            }
            $this->template('edit',$error);
            return;
        } else {
            $data = array(
                'nama_Mis_en_beaute' => $this->input->post('nama_Mis_en_beaute'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga_Mis_en_beaute' => $this->input->post('harga_Mis_en_beaute')
            );

            if ($this->input->post('gambar') != null) {
                // UPLOAD IMAGE
                $this->upload->do_upload('gambar');
                $data['gambar'] = $this->upload->data('file_name');
            }

            // INSERT INTO DATABASE
            $this->db->where('Mis_en_beaute_id',$id);
            $this->db->update('Mis_en_beaute',$data);

            // REDIRECT TO USER PAGE
            $this->session->set_flashdata('success','Data berhasil diperbarui!');
            redirect(base_url() . 'admin/Mis_en_beaute/');
        }
    }

    public function delete($id)
    {
        $data = $this->db->get_where('Mis_en_beaute',['Mis_en_beaute_id' => $id])->row();

        // DELETING IMAGE
        unlink('uploads/' . $data->gambar);

        $this->db->delete('Mis_en_beaute',['Mis_en_beaute_id' => $id]);

        $this->session->set_flashdata('success','Data berhasil dihapus!');
        redirect(base_url() . 'admin/Mis_en_beaute/');
    }
}

/* End of file Controllername.php */
