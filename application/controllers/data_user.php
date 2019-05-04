<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_user extends CI_Controller {

    public function index(){
        $this->load->model('M_user');

		$isi['data_user'] = $this->M_user->tampilDataUser();

        $this->load->view('admin/data-user', $isi);
    }
    
    public function tambahUser(){
        $data['id_user']			= $this->input->post('id_user');
		$data['pass']	= $this->input->post('pass');
        $data['id_peran']		= $this->input->post('kat_user');
        
        $this->load->model('M_user');
        $this->M_user->tambahDataUser($data);
    }

}