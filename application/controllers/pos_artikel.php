<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pos_artikel extends CI_Controller {
    public function index(){
        $this->load->view('pos-artikel');
    }

    public function tambahPos(){
        $data['judul_artikel'] = $this->input->post('judul_artikel');
        $data['isi_artikel'] = $this->input->post('artikel');

        $data1 = array(
            'judul_artikel' => $data['judul_artikel'],
            'isi_artikel' => $data['isi_artikel']
        );

        $tambah = $this->db->insert('artikel', $data1);

        $judul_artikel = $data['judul_artikel'];

        $query = "SELECT id_artikel FROM artikel WHERE judul_artikel='$judul_artikel'";
        $artikel = $this->db->query($query)->row_array();
        $id_artikel = $artikel['id_artikel'];
        
        // upload data
        $this->load->helper(array('form', 'url'));

		//config utk upload gambar
		$config['upload_path']		= './upload/gambar-artikel/';
		$config['allowed_types']	= 'png|gif|jpg|jpeg';
		$config['max_size']			= 10240;
		$config['encrypt_name'] 	= TRUE;
		$this->load->library('upload', $config);

		if($this->upload->do_upload('image')){
            $data1 = array('upload_data' => $this->upload->data());
            $gambar= $data1['upload_data']['file_name'];
            
            $data2 = array(
                'id_artikel' => $id_artikel,
                'nama_gambar' => $gambar
            );

            $this->db->insert('gambar', $data2);

            echo '<script> alert("Sukses"); </script>';
            redirect(base_url('/pos_artikel'), 'refresh');
        } else {
            echo '<script>alert("Failed upload this Record!");</script>';
            echo "<script> window.history.back(); </script>";
        }
    }

    public function tampilArtikel(){
        $data['artikel'] = $this->db->query("SELECT * FROM artikel");

        $this->load->view('lihat-artikel', $data);
    }
}