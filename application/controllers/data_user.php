<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_user extends CI_Controller {
    // untuk mengecek apakah sudah login atau sesuai dengan perannya
    public function __construct(){
        parent::__construct();
		$this->load->model('Cek_login');
		
		$this->Cek_login->login_admin();
	}

    public function index(){
        $this->load->model('M_user');

		$isi['data_user'] = $this->M_user->tampilDataUser();

        $this->load->view('admin/data-user', $isi);
    }

    public function formTambahUser(){

        $this->load->view('admin/tambah-user');
    }
    
    public function tambahUser(){
        $data['id_user']		= $this->input->post('id_user');
		$data['pass']	        = $this->input->post('pass');
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

    public function editUser(){
        $id_user = $this->uri->segment(3);
        $id_peran = $this->uri->segment(4);

        $this->load->model('M_user');
        $isi['user'] = $this->M_user->editData($id_user, $id_peran);
        $isi['peran'] = $this->M_user->tampilPeran();

        $this->load->view('admin/edit-user', $isi);
    }

    public function updateUser(){
        $data['user']           = $this->input->post('user');
        $data['pass']			= $this->input->post('pass');
        $data['peran']			= $this->input->post('peran');
        
        $this->load->model('M_user');
		$this->M_user->updateData($data);
		
		redirect(base_url('data_user'), 'refresh');
		
    }

    public function hapusUser(){
        $id_user = $this->uri->segment(3);
        $id_peran = $this->uri->segment(4);

		$_id = $this->db->get_where('user',[
                            'id_user' => $id_user,
                            'id_peran' => $id_peran
                            ])->row();
		$query = $this->db->delete('user', array('id_user' => $id_user, 'id_peran' => $id_peran));

		redirect(base_url('data_user'), 'refresh');
    }

}