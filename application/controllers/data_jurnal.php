<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_jurnal extends CI_Controller {
	// untuk mengecek apakah sudah login atau sesuai dengan perannya
	public function __construct(){
        parent::__construct();
		$this->load->model('Cek_login');
		
		$this->Cek_login->login_editor();
	}

	public function index()
	{	
		$this->load->model('M_pusatData');
		$isi['pusat_data'] = $this->M_pusatData->tampilPusatData();

        $this->load->view('admin/data-jurnal', $isi);
	}

	public function tampilPerBidang(){
		$id_bidang = $this->input->get('id_bidang');

		$this->load->model('M_pusatData');
		$data = $this->M_pusatData->tampilDataPerBidang($id_bidang);

		echo json_encode($data);
	}

	public function tampilJSAT(){
		$this->load->model('M_pusatData');
		$isi['pusat_data'] = $this->M_pusatData->tampilDataJSAT();

        $this->load->view('admin/data-jurnal-jsat', $isi);
	}

	public function tampilIOP(){
		$this->load->model('M_pusatData');
		$isi['pusat_data'] = $this->M_pusatData->tampilDataIOP();

        $this->load->view('admin/data-jurnal-iop', $isi);
	}

	public function tampilSBSN(){
		$this->load->model('M_pusatData');
		$isi['pusat_data'] = $this->M_pusatData->tampilDataSBSN();

        $this->load->view('admin/data-jurnal-sbsn', $isi);
	}

	public function editJurnal(){
		$id_pusat = $this->uri->segment(3);

		$this->load->model('M_pusatData');
		$isi['pusat'] = $this->M_pusatData->cariId($id_pusat);

		$this->load->model('M_bidang');
		$isi['bidang_'] = $this->M_bidang->tampilBidang();

		$this->load->model('M_bid_subbid');
		$isi['sub_bidang'] = $this->M_bid_subbid->cariSub($id_pusat);

		$this->load->view('admin/edit-jurnal', $isi);
	}

	public function hapusJurnal(){
		$id_pusat = $this->uri->segment(3);

		$_id = $this->db->get_where('pusat_data',['id_pusat' => $id_pusat])->row();
		$query = $this->db->delete('pusat_data', array('id_pusat' => $id_pusat));
		if($query){
			// menghapus file dalam folder
			unlink("./upload/jurnal/".$_id->dokumen);
		}

		redirect(base_url('data_jurnal'), 'refresh');
	}

	public function updatePusat(){
		
		$this->load->model('M_pusatData');
		$this->load->helper(array('form', 'url'));
		$id_pusat = $this->input->post('id_pusat');

		//config utk upload gambar
		$config['upload_path']		= './upload/jurnal/';
		$config['allowed_types']	= 'zip|rar|pdf|doc|docx';
		$config['max_size']			= 10240;
		$config['encrypt_name'] 	= TRUE;
		$this->load->library('upload', $config);

		$data['dok'] = null;

		if($this->upload->do_upload('dokumen')){
			$data1 = array('upload_data' => $this->upload->data());
			$dokumen = $data1['upload_data']['file_name'];
			$data['dok']	= $dokumen;

			$dok_lama = $this->M_pusatData->cariDokumen($id_pusat);
			unlink("./upload/jurnal/".$dok_lama);
		} else {
			$data['dok']	= $this->M_pusatData->cariDokumen($id_pusat);
		}

		$data['id_jurnal']			= $this->input->post('id_jurnal');
		$data['user']				= $this->input->post('user');
		$data['jurnal']				= $this->input->post('jurnal');
		$data['bidang']				= $this->input->post('bidang');
		$data['sub_bidang']			= $this->input->post('sub_bidang');
		$data['nama_penulis']		= $this->input->post('nama_penulis');
		$data['email']				= $this->input->post('email');
		$data['afiliasi']			= $this->input->post('afiliasi');
		$data['status']				= $this->input->post('status');
		
		$this->load->model('M_jurnal');
		$this->M_jurnal->updateDataJurnal($data['id_jurnal'], $data['jurnal']);

		$this->load->model('M_bid_subbid');
		$data['id_bid_subbid'] = $this->M_bid_subbid->cariId($data['bidang'], $data['sub_bidang']);
		
		$this->M_pusatData->updateDataPusat($id_pusat, $data);
		
		redirect(base_url('data_jurnal'), 'refresh');
		
	}
}