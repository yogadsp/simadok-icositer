<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class form_jurnal extends CI_Controller {

	public function index()
	{	
		$this->load->model('M_bidang');

		$isi['bidang_'] = $this->M_bidang->tampilBidang();

		$this->load->view('admin/form-jurnal', $isi);
	}

	public function getSubBidang(){
		$id_bidang = $this->input->get('id_bidang');

		$this->load->model('M_sub_bidang');

		$data = $this->M_sub_bidang->getSubBidangRows($id_bidang);

		echo json_encode($data);
	}

	public function tambahJurnal(){
		$this->load->helper(array('form', 'url'));

		//config utk upload gambar
		$config['upload_path']		= './upload/jurnal/';
		$config['allowed_types']	= 'zip|rar|pdf|doc|docx';
		$config['max_size']			= 10240;
		$config['encrypt_name'] 	= TRUE;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('dokumen')){
			$data1 = array('upload_data' => $this->upload->data());
			$dokumen= $data1['upload_data']['file_name'];

			$data['user']			= $this->input->post('user');
			$data['tgl_input']		= $this->input->post('tgl_input');
			$data['jurnal']			= $this->input->post('jurnal');
			$data['bidang']			= $this->input->post('bidang');
			$data['sub_bidang']		= $this->input->post('sub_bidang');
			$data['nama_penulis']	= $this->input->post('nama_penulis');
			$data['email']			= $this->input->post('email');
			$data['afiliasi']		= $this->input->post('afiliasi');
			$data['status']			= $this->input->post('status');
			$data['dokumen']		= $dokumen;


			$this->load->model('M_bid_subbid');
			$id_bid_subbid = $this->M_bid_subbid->cariId($data['bidang'], $data['sub_bidang']);
			
			$this->load->model('M_jurnal');
			$tambah_jurnal = $this->M_jurnal->tambah($data['jurnal']);
			$id_jurnal = $this->M_jurnal->cariId($data['jurnal']);

			$data['id_bid_subbid'] = $id_bid_subbid;
			$data['id_jurnal'] = $id_jurnal;

			$this->load->model('M_pusatData');
			$this->M_pusatData->tambah($data);

			echo '<script>alert("Success!");</script>';
			redirect(base_url('home/data_jurnal'), 'refresh');
		} else {
			echo '<script>alert("Failed upload this Record!");</script>';
			echo "<script> window.history.back(); </script>";
		}
	}

	public function tambahBidang(){
		$nama_bidang			= $this->input->post('nama_bidang');

		$this->load->model('M_bidang');
		$this->M_bidang->tambah($nama_bidang);
	}

	public function tambahSubBidang(){
		$nama_subbidang			= $this->input->post('nama_subbidang');
		$id_bidang				= $this->input->post('id_bidang');

		$this->load->model('M_sub_bidang');
		$this->M_sub_bidang->tambah($nama_subbidang);

		$id_subbidang = $this->M_sub_bidang->cariId($nama_subbidang);

		$this->load->model('M_bid_subbid');
		$this->M_bid_subbid->tambah($id_bidang, $id_subbidang);
	}

	// public function tambahBidSubbid (){
	// 	$nama_subbidang			= $this->input->post('nama_subbidang');
	// 	$id_bidang				= $this->input->post('id_bidang');


	// }
}