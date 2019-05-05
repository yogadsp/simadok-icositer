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

    public function login_admin(){
        $data['u'] = $this->input->post('user');
		$data['p'] = $this->input->post('pass');
		$this->load->model('M_Login');
		$this->M_Login->cek_login($data);
    }

    public function infouser(){
        $id_user = $this->input->post('id_user');
        $id_peran = $this->input->post('id_peran');

        $this->load->model('M_user');
        $cari = $this->M_user->cariUser($id_user, $id_peran);

        echo 'ID USER = '. $cari->id_user;

    }

}