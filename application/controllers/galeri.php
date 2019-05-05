<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class galeri extends CI_Controller {
    public function index(){
        $this->load->model('M_galeri');
        $isi['galeri'] = $this->M_galeri->tampilGambar();

        $this->load->view('lihat-galeri', $isi);
    }
}