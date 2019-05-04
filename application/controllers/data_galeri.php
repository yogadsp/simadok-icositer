<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class data_galeri extends CI_Controller {
    public function index(){
        $this->load->model('M_galeri');
        $isi['galeri'] = $this->M_galeri->tampilDataGaleri();

        $this->load->view('admin/data-galeri', $isi);
    }
}