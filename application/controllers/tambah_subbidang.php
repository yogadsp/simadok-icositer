<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tambah_subbidang extends CI_Controller {
    public function index(){
        $this->load->model('M_bidang');
        $isi['bidang_'] = $this->M_bidang->tampilBidang();

        $this->load->view('tambah-subbidang', $isi);
    }

    public function tambahBidSubbid(){
		$nama_subbidang		= $this->input->post('nama_subbidang');
		$id_bidang			= $this->input->post('id_bidang');

		$this->load->model('M_sub_bidang');
		$this->M_sub_bidang->tambah($nama_subbidang);
		$id_subbidang = $this->M_sub_bidang->cariId($nama_subbidang);

		$this->load->model('M_bid_subbid');
		$this->M_bid_subbid->tambah($id_bidang, $id_subbidang);
	}
}