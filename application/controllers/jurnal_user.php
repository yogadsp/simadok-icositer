<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jurnal_user extends CI_Controller {
    // untuk mengecek apakah sudah login atau sesuai dengan perannya
	public function __construct(){
        parent::__construct();
		$this->load->model('Cek_login');
		
		$this->Cek_login->login_penulis();
	}

	public function index()
	{	
		$this->load->model('M_pusatData');
		$isi['pusat_data'] = $this->M_pusatData->tampilPusatData();
        // $this->load->model('Cek_login');
		// $this->Cek_login->apa_login();
        $this->load->view('jurnal-user', $isi);
	}

}