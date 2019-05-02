<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_penulis extends CI_Controller {

    public function index(){
        $this->load->view('tambah-penulis');
    }
    
    public function tambahPenulis(){
        $data['email']			= $this->input->post('email');
		$data['nama_penulis']	= $this->input->post('nama_penulis');
        $data['afiliasi']		= $this->input->post('afiliasi');
        
        $this->load->model('M_penulis');
        $this->M_penulis->tambah($data['email'], $data['nama_penulis'], $data['afiliasi']);
    }

}