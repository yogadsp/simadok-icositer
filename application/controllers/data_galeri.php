<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_galeri extends CI_Controller {
    public function index(){
        $this->load->model('M_galeri');
        $isi['galeri'] = $this->M_galeri->tampilDataGaleri();

        $this->load->view('admin/data-galeri', $isi);
    }

    public function editGaleri(){
        $id_galeri = $this->uri->segment(3);

        $this->load->view('M_galeri');
        $isi['galeri'] = $this->M_galeri->editData($id_galeri);

        $this->load->view('admin/edit-galeri');
    }
}