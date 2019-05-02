<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
		$this->load->model('M_pusatData');
		$isi['pusat_data'] = $this->M_pusatData->tampilPusatData();
        // $this->load->model('Cek_login');
		// $this->Cek_login->apa_login();
        $this->load->view('home', $isi);
	}

	public function tambahArtikel(){
		$data['isi']		= $this->input->post('content');

		// $query = "INSERT INTO ";
	}

}