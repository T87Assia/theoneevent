<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devis extends My_Controller {

    public function __construct()
    {
      parent::__construct();
      $this->load->model('TransactionModel');
    }

    public function index()
	{
		if(isset($_GET['id'])) {
			$id = $_GET['id'];

			$data['detail'] = $this->TransactionModel->getDataById($id);
	
			$mpdf = new \Mpdf\Mpdf();
			$html = $this->load->view('client/devis',$data,true);
			$mpdf->SetTitle('Devis de la commande ' . $id);
			$mpdf->WriteHTML($html);
			$mpdf->Output('Devis de la commande ' . $id . '.pdf', 'D');
		} else {
			show_404();
		}
	}
  
  }
  
  /* End of file Controllername.php */
  