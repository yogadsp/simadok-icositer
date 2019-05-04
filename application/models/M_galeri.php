<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class M_galeri extends CI_model{

    public function tampilDataGaleri(){
        $query = "SELECT * FROM galeri";
        $data = $this->db->query($query);

        return $data;
    }

    public function posData($data){
        $data1 = array(
            'tgl_galeri' => $data['tgl_galeri'],
            'keterangan' => $data['ket'],
            'gambar' => $data['gambar'],
            'id_user' => $data['user']
        );

        $this->db->insert('galeri', $data1);
    }
}