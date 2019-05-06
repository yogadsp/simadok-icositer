<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_galeri extends CI_Controller {
	// untuk mengecek apakah sudah login atau sesuai dengan perannya
	public function __construct(){
        parent::__construct();
		$this->load->model('Cek_login');
		
		$this->Cek_login->login_editor();
	}
	
    public function index(){
        $this->load->model('M_galeri');
        $isi['galeri'] = $this->M_galeri->tampilDataGaleri();

        $this->load->view('admin/data-galeri', $isi);
    }

    public function editGaleri(){
        $id_galeri = $this->uri->segment(3);

        $this->load->model('M_galeri');
        $isi['galeri'] = $this->M_galeri->editData($id_galeri);

        $this->load->view('admin/edit-galeri', $isi);
    }

    public function updateGaleri(){
		
		$this->load->model('M_galeri');
		$this->load->helper(array('form', 'url'));
		$id_galeri = $this->input->post('id_galeri');

		//config utk upload gambar
		$config['upload_path']		= './upload/galeri/';
		$config['allowed_types']	= 'gif|jpg|png';
		$config['max_size']			= 10240;
		$config['encrypt_name'] 	= TRUE;
		$this->load->library('upload', $config);

		$data['gambar'] = null;

		if($this->upload->do_upload('gambar')){
			$data1 = array('upload_data' => $this->upload->data());
			$gambar = $data1['upload_data']['file_name'];
			$data['gambar']	= $gambar;

            $gmb_lama = $this->M_galeri->cariGambar($id_galeri);
            // untuk menghapus file di folder
			unlink("./upload/galeri/".$gmb_lama);
		} else {
			$data['gambar']	= $this->M_galeri->cariGambar($id_galeri);
        }
        
        $data['user']           = $this->input->post('user');
        $tgl_galeri             = $this->input->post('tgl_galeri');
        $data['tgl_galeri']     = date('Y-m-d', strtotime($tgl_galeri));

		$data['ket']			= $this->input->post('ket');
		
		$this->M_galeri->updateData($id_galeri, $data);
		
		redirect(base_url('data_galeri'), 'refresh');
		
    }
    
    public function hapusGaleri(){
        $id_galeri = $this->uri->segment(3);

		$_id = $this->db->get_where('galeri',['id_galeri' => $id_galeri])->row();
		$query = $this->db->delete('galeri', array('id_galeri' => $id_galeri));
		if($query){
			// menghapus file dalam folder
			unlink("./upload/galeri/".$_id->gambar);
		}

		redirect(base_url('data_galeri'), 'refresh');
    }
}