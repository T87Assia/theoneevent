<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends My_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('TransaksiModel');
    }

    public function index()
	{
		if(isset($_GET['id'])) {
			$id = $_GET['id'];

			$data['detail'] = $this->TransaksiModel->getDataById($id);
	
			$mpdf = new \Mpdf\Mpdf();
			$html = $this->load->view('pelanggan/html_to_pdf',$data,true);
			$mpdf->SetTitle('Détails de la commande ' . $id);
			$mpdf->WriteHTML($html);
			$mpdf->Output('Détails de la commande ' . $id . '.pdf', 'D');
		} else {
			show_404();
		}
	}
  
  }
  
  /* End of file Controllername.php */
  