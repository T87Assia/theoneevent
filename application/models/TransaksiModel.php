<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiModel extends CI_Model {

  public function getTransaction()
  {
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->join('pelanggan','pelanggan.pelanggan_id = pemesanan.user_id');
    $query = $this->db->get();
    return $query->result();
  }

  public function myTransaction()
  {
    $this->db->where('user_id',$this->session->userdata('user_id'));
		return $this->db->get('pemesanan')->row();
  }

	public function myTransactions()
  {
    $this->db->where('user_id',$this->session->userdata('user_id'));
		return $this->db->get('pemesanan')->result();
  }

  public function simpanTransaksi($data)
  {
    $this->db->insert('pemesanan',$data);
  }

  public function simpanDetailTransaksi($id_transaksi,$data)
  {
    if ($data['gedung'] != null) {
      $data_gedung = [
        'pemesanan_id' => $id_transaksi,
        'gedung_id' => $data['gedung']
      ];
      $this->db->insert('pemesanan_gedung',$data_gedung);
    }

    if ($data['Mis_en_beaute'] != null) {
      $data_Mis_en_beaute = [
        'pemesanan_id' => $id_transaksi,
        'Mis_en_beaute_id' => $data['Mis_en_beaute']
      ];
      $this->db->insert('pemesanan_Mis_en_beaute',$data_Mis_en_beaute);
    }

    if ($data['katering'] != null) {
      $data_katering = [
        'pemesanan_id' => $id_transaksi,
        'katering_id' => $data['katering']
      ];
      $this->db->insert('pemesanan_katering',$data_katering);
    }

    if ($data['Deco_et_Animation'] != null) {
      $data_Deco_et_Animation = [
        'pemesanan_id' => $id_transaksi,
        'Deco_et_Animation_id' => $data['Deco_et_Animation']
      ];
      $this->db->insert('pemesanan_Deco_et_Animation',$data_Deco_et_Animation);
    }

    if ($data['Photo_video'] != null) {
      $data_Photo_video = [
        'pemesanan_id' => $id_transaksi,
        'Photo_video_id' => $data['Photo_video']
      ];
      $this->db->insert('pemesanan_Photo_video',$data_Photo_video);
    }
  }

  public function getDataById($id)
  {
    $this->db->select('*');
    $this->db->from('pemesanan');
    $this->db->where('id_pemesanan',$id);
    $this->db->join('pelanggan','pelanggan_id = pemesanan.user_id','left');
    $this->db->join('pemesanan_Deco_et_Animation','pemesanan_Deco_et_Animation.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_Mis_en_beaute','pemesanan_Mis_en_beaute.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_Photo_video','pemesanan_Photo_video.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_gedung','pemesanan_gedung.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('pemesanan_katering','pemesanan_katering.pemesanan_id = pemesanan.id_pemesanan','left');
    $this->db->join('gedung','gedung.gedung_id = pemesanan_gedung.gedung_id','left');
    $this->db->join('decoration','decoration.Deco_et_Animation_id = pemesanan_Deco_et_Animation.Deco_et_Animation_id','left');
    $this->db->join('Mis_en_beaute','Mis_en_beaute.Mis_en_beaute_id = pemesanan_Mis_en_beaute.Mis_en_beaute_id','left');
    $this->db->join('katering','katering.katering_id = pemesanan_katering.katering_id','left');
    $this->db->join('Photo_video','Photo_video.Photo_video_id = pemesanan_Photo_video.Photo_video_id','left');
    $query = $this->db->get();

    return $query->row();
  }

}

/* End of file ModelName.php */
