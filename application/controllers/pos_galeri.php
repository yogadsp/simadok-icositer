<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pos_galeri extends CI_Controller {
    public function index(){
        $this->load->view('admin/pos-galeri');
    }

    public function pos(){
        $this->load->helper(array('form', 'url'));

		//config utk upload gambar
		$config['upload_path']		= './upload/galeri/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['max_size']			= 10240;
		$config['encrypt_name'] 	= TRUE;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('gambar')){
			$data1  = array('upload_data' => $this->upload->data());
			$gambar = $data1['upload_data']['file_name'];

			$data['user']          	= $this->input->post('user');
            $tgl_galeri             = $this->input->post('tgl_galeri');
            $data['tgl_galeri']     = date('Y-m-d', strtotime($tgl_galeri));
			$data['ket']			= $this->input->post('ket');
			$data['gambar']		    = $gambar;

			$this->load->model('M_galeri');
			$this->M_galeri->posData($data);

			echo '<script>alert("Success!");</script>';
			redirect(base_url('data_galeri'), 'refresh');
		} else {
            echo '<script>alert("Fail!");</script>';
            echo "<script> window.history.back(); </script>";
		}
    }
}