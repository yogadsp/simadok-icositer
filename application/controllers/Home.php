<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{	
        $this->load->model('Cek_login');
		$this->Cek_login->apa_login();
        $this->load->view('home');
        
	}

}